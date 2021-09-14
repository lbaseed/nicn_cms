<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComplaintForms;
use App\Models\CaseStageTypes;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("settings");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function createComplaintForm(Request $request){

        $request->validate([
            'complaint_form' => 'required',
        ]);

        $complaintForm = ComplaintForms::create([
            'complaint_form' => $request['complaint_form'],
        ]);

        return $complaintForm ? redirect()->back()->with("compSuccess","A Form of Complaint Added Successfully") : redirect()->back()->with("compError","Failed to Add");
    }

    public static function listComplaintForms(){

        $forms = ComplaintForms::all();

        return $forms;
    } 

    public function createCaseStage(Request $request){

        $request->validate([
            'stage_name' => 'required',
            'stage_type' => 'required',
        ]);

        $stage = CaseStageTypes::create([
            'stage_name' => $request['stage_name'],
            'stage_type' => $request['stage_type'],
        ]);

        return $stage ? redirect()->back()->with("stageSuccess","A Stage Type Added Successfully") : redirect()->back()->with("stageError","Failed to Add");
    }

    public static function listCaseStagesTypes($stageType='lcs'){

        $stagesTypes = CaseStageTypes::where('stage_type', $stageType)->orderBy('stage_name', 'ASC')->get();

        return $stagesTypes;

    }

    public static function activeMenu($uri = '')
    {
        $active = '';
        if (Request::is(Request::segment(1) . '/' . $uri . '/*') || Request::is(Request::segment(1) . '/' . $uri) || Request::is($uri)) {
            $active = 'active';
        }
        return $active;
    }
}
