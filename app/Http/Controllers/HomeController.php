<?php

namespace App\Http\Controllers;
use App\models\Cases_nicn;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $gombeCases = App\Models\Cases_nicn::where('division', 'GMB')->orderBy('case_id', 'ASC')->take(4)->get();
        $bauchiCases = Cases_nicn::where('division', 'BAU')->orderBy('case_id', 'ASC')->take(4)->get();
        $yolaCases = Cases_nicn::where('division', 'YL')->orderBy('case_id', 'ASC')->take(4)->get();
        
        // $cases = Cases::all();
        
        return view('home', ['gombe'=>$gombeCases, 'bauchi'=>$bauchiCases, 'yola'=>$yolaCases]);
    }

   
}
