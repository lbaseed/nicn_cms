<?php

namespace App\Http\Controllers;
use App\models\Cases;

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
        $gombeCases = Cases::where('division', 'GMB')->orderBy('case_id', 'ASC')->take(4)->get();
        $bauchiCases = Cases::where('division', 'BAU')->orderBy('case_id', 'ASC')->take(4)->get();
        $yolaCases = Cases::where('division', 'YL')->orderBy('case_id', 'ASC')->take(4)->get();
        
        // $cases = Cases::all();
        
        return view('home', ['gombe'=>$gombeCases, 'bauchi'=>$bauchiCases, 'yola'=>$yolaCases]);
    }

   
}
