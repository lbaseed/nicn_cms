<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\CaseStages;
use App\Models\CaseArchive;
use Illuminate\Http\Request;
use App\Http\Controllers\SettingsController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CaseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cases = Cases::orderBy('case_id','asc')->get();

        return view("viewCases", ['cases' => $cases,'division'=>'ALL']);
    }

    public function divisionCases(Request $div){

        $div["division"] == "ALL" ? $cases = Cases::orderBy('case_id', 'asc')->get() : $cases = Cases::where('division', $div["division"])->orderBy('case_id','asc')->get();

        return view("viewCases", ['cases' => $cases, 'division' => $div["division"]]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $case = Cases::find($id);
        $caseStages = CaseStages::where('case_ref', $id)->orderBy('created_at','desc')->get();

        return view("viewCase", ['case' => $case, 'caseStages' => $caseStages]);
    }
    public function edit($id)
    {
        $case = Cases::find($id);
        $stageTypes = SettingsController::listCaseStagesTypes();

        return view("editCase", ['case' => $case, 'stageTypes' => $stageTypes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $fields, $id)
    {

        $case = Cases::find($id);

        //keep status change record
        if($case->current_stage=='Fresh Filing'){
            $caseStage = CaseStages::create([
                'case_ref' => $case->id,
                'case_id' => $case->case_id,
                'prev_stage' => $case->current_stage,
                'prev_stage_date' => $case->filing_date,
                'new_stage' => $fields["current_stage"],
                'new_stage_date' => $fields["adjournment_date"],
                'curr_user'=> Auth::user()->file_number,
            ]);
        }else{
            $caseStage = CaseStages::create([
                'case_ref' => $case->id,
                'case_id' => $case->case_id,
                'prev_stage' => $case->current_stage,
                'prev_stage_date' => $case->hearing_date,
                'new_stage' => $fields["current_stage"],
                'new_stage_date' => $fields["adjournment_date"],
                'curr_user'=> Auth::user()->file_number,
            ]);
        }
        

        $case->update($fields->all());
        $case->update([
            'curr_user'=> Auth::user()->file_number
        ]);

        return $case ? redirect("/case/{$id}")->withSuccess("Updated Successfully!") : redirect()->back()->withError("Failed to Update");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addCaseForm()
    {
        $complaintForms = SettingsController::listComplaintForms();
        
        return view('addCase', ['complaintForms' => $complaintForms]);
    }

    public function addCase(Request $fields)
    {

        $fields->validate([
            'case_id' => 'required',
            'case_name' => 'required',
            'case_subject' => 'required',
            'claimant' => 'required',
            'defendant' => 'required',
            'division' => 'required',
            'filing_date' => 'required',
            'complaint_form' => 'required',
        ]);

        $insert = Cases::create([
            'case_id' => strtoupper($fields["case_id"]),
            'case_name' => $fields["case_name"],
            'case_subject' => $fields["case_subject"],
            'claimant' => $fields["claimant"],
            'defendant' => $fields["defendant"],
            'filing_date' => $fields["filing_date"],
            'current_stage' => "Fresh Filing",
            'division' => $fields["division"],
            'complaint_form' => $fields['complaint_form'],
            'curr_user' => Auth::user()->file_number,
        ]);

        //insert Case Stage
        $case_stage = CaseStages::create([
            'case_ref' => $insert->id,
            'case_id' => $insert->case_id,
            'prev_stage' => $insert->current_stage,
            'prev_stage_date' => $insert->filing_date,
            'new_stage' => $insert->current_stage,
            'new_stage_date' => $insert->filing_date,
            'curr_user' =>Auth::user()->file_number,
        ]);

        return $insert ? redirect()->back()->withSuccess("Case Filed Successfully") : redirect()->back()->withError("Failed to Add");
    }

    public function searchCases(Request $field){

        $cases = Cases::where('case_id', 'like', '%'.$field["param"].'%')
        ->orWhere('case_name', 'like', '%'.$field["param"].'%')
        ->orderBy('case_id', 'asc')
        ->get();

        return view('searchCases',['cases' => $cases]);
    }

    public static function casesQty($division){
        $numCases = Cases::where('division', $division)
        ->where('termination_date','=',null)
        ->count();

        return $numCases;
    }

    public static function casesReturn(){
        
        return view('casesReturn');
    }
    
    public function generate(Request $request){

        

        $mpdf = new \Mpdf\Mpdf([
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'format' => 'A4-L',
            'defaultheaderline' => 0,
        ]);

        $period = $request['period'];
        
        $qtText=NULL;
        $quarter = NULL;
        switch($period){
            case 1:
                $quarter = ['start'=> '2021-01-01','end'=> '2021-03-31'];
                $qtText = "1st QUARTER ENDED: MARCH".Date("Y", strtotime($quarter["start"]) );
            break;
            case 4:
                $quarter = ['start'=> '2021-04-01','end'=> '2021-06-30'];
                $qtText = "2nd QUARTER ENDED: JUNE".Date("Y", strtotime($quarter["start"]));
            break;
            case 7:
                $quarter = ['start'=> '2021-07-01','end'=> '2021-09-30'];
                $qtText = "3rd QUARTER ENDED: SEPTEMBER ".Date("Y", strtotime($quarter["start"]));
            break;
            case 10:
                $quarter = ['start'=> '2021-10-01','end'=> '2021-12-31'];
                $qtText = "4th QUARTER ENDED: DECEMBER ".Date("Y", strtotime($quarter["start"]));
            break;
        }
        $fileName = "$qtText.pdf";
        if ($period) {
            $assignedCases = self::assignedCases($quarter);
            $broughtForward = self::casesBroughtForward($quarter);
            $judgementDelivered = self::judgementDelivered($quarter);
            $struckOut = self::struckOut($quarter);
            $reAssigned = self::reAssigned($quarter);
            $archived = self::archivedCases($quarter);
            $pending = self::pendingCases($quarter);

            $quarterly = [
            'broughtForward' => count($broughtForward) - count($archived),
            'assignedCases' => count($assignedCases),
            'totalCurrentCases' => count($broughtForward) - count($archived) + count($assignedCases),
            'judgementDelivered' => count($judgementDelivered),
            'struckOut' => count($struckOut),
            'reAssigned' => count($reAssigned),
            'archived' => count($archived),
            'totalDisposedCases' => count($judgementDelivered) + count($struckOut) + count($reAssigned),
            
        ];

            // $img = asset('/assets/img/nicn-logo.png');
            // image watermark
            // $mpdf->SetWatermarkImage("http://192.168.110.159:8082/assets/img/nicn-logo.png");
            // $mpdf->showWatermarkImage = true;

            //text watermark
            $mpdf->SetWatermarkText("NICN");
            $mpdf->showWatermarkText = true;
            $mpdf->watermarkImageAlpha = 0.2;

            $html = \View::make('components.quarterly', ['items'=>$quarterly, 'period' => $qtText]);
            $html->render();
            $mpdf->WriteHTML($html);
            $mpdf->AddPage();

            // judgements delivered

            $page2 = \View::make('components.judgment', ['items'=>$judgementDelivered, 'period' => $qtText]);
            $page2->render();
            $mpdf->WriteHTML($page2);

            $mpdf->SetHeader('NJC/MCPJ/5/(Panel)');

            $mpdf->AddPage();

            // ages of cases

            $page3 = \View::make('components.ages', ['items'=>$pending, 'period' => $qtText]);
            $page3->render();
            $mpdf->WriteHTML($page3);

            return $mpdf->Output($fileName, "I");

        }
          
    }

    // cases return preparation functions
    public static function casesBroughtForward($range){

        $cases = Cases::where('assignment_date', '<', $range['start'])
            ->get();

        return $cases;
    }

    public function judgementDelivered($range){
        $cases = Cases::whereBetween('termination_date', [$range['start'], $range['end']])
        ->Where('current_stage', '=', 'Judgement Delivered')
        ->get();

        return $cases;
    }

    public function struckOut($range){
        $cases = Cases::whereBetween('termination_date', [$range['start'], $range['end']])
        ->Where('current_stage', '=', 'Struck Out')
        ->get();

        return $cases;
    }

    public function reAssigned($range){
        $cases = Cases::whereBetween('termination_date', [$range['start'], $range['end']])
        ->Where('current_stage', '=', 'Re-Assigned')
        ->get();

        return $cases;
    }

    public function assignedCases($range){

        $cases = Cases::whereBetween('assignment_date', [$range['start'], $range['end']])
        ->get();

        return $cases;
    }

    public function archivedCases($range){
        $cases = Cases::where('termination_date', '<', $range["start"])
            ->get();

            return $cases;
    }
    
    public function pendingCases($range){

        $cases = Cases::where('current_stage', '<>', 'Judgement Delivered')
            ->where('current_stage', '<>', 'Struck Out')
            ->where('current_stage', '<>', 'Re-Assigned')
            ->where('current_stage', '<>', 'Dismissed')
            ->orwhere(function($query)  use($range){
                $query->where('termination_date','>',$range["end"]);
            })
            ->get();

        return $cases;

    }

    public function archive(){

        $stages = SettingsController::listCaseStagesTypes("ts");
        $cases = Cases::where('termination_date','=',null)->orderBy('case_id','asc')->get();
        $archivedCases = Cases::where('termination_date','<>',null)->orderBy('case_id','asc')->get();
        return view("archive",['terminationMsg' => $stages, 'cases'=>$cases, 'archived'=>$archivedCases]);
    }

    public function archiveUpdate(Request $request){

            $request->validate([
                'case_id'=>'required',
                'termination_date'=>'required',
                'termination_msg'=>'required',
            ]);

            // archiving case after termination
        $insert = CaseArchive::create([
            'case_id'=>$request['case_id'],
            'termination_msg' => $request['termination_msg'],
            'termination_date' => $request['termination_date'],
            'comment' => $request['comment'],
            'archived_by' => Auth::user()->file_number,
        ]);

        // updating case stage
        $case = Cases::find($request['case_id']);

        $updateCase = Cases::where('id', $request['case_id'])
        ->update([
            'current_stage' => $request['termination_msg'],
            'termination_date' => $request['termination_date'],
            'comment' => $request['comment'],
            'curr_user' => Auth::user()->file_number,
        ]);

        //update case changing log
        // TODO 
            // ensure users that made changes to a case are tracked
        $caseStage = CaseStages::create([
            'case_ref' => $case->id,
            'case_id' => $case->case_id,
            'prev_stage' => $case->current_stage,
            'prev_stage_date' => $case->filing_date,
            'new_stage' => $request['termination_msg'],
            'new_stage_date' => $request['termination_date'],
            'curr_user' => Auth::user()->file_number,
        ]);

            
        

        return $updateCase ? redirect()->back()->withSuccess("Case Status Updated Successfully") : redirect()->back()->withError("Operation Failed") ;
    }

}
