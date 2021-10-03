<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $systemUsers = User::all();
        return view("addUsers",['users'=>$systemUsers]);
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
        $request->validate([
            'file_number' =>'required|string|unique:users,file_number',
            'name' =>'required',
            'email' =>'required|string|unique:users,email',
            'clrs' =>'required',
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => bcrypt("password"),
            'file_number' =>$request['file_number'],
            'clrs' => $request['clrs'],
        ]);

        return self::index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view("profile", ['user'=>$user]);
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

    public function editPassword(Request $request){

        $cur_user = Auth::user()->file_number;
        $user = User::where('file_number', $cur_user)->first();

        //validate user input
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'conf_new_password' => 'required',
        ]);

        // current password check
        if(Hash::check($request['old_password'], $user->password)){
            if($request['new_password'] == $request['conf_new_password']){
                $update = User::where('file_number', $cur_user)->update([
                    'password' => bcrypt($request['new_password'])
                ]);

                // message password update successful
               return redirect()->back()->withSuccess("Password Changed Successfully");
            }else{
                // password mismatched
            return redirect()->back()->withError("New and Confirm Password mis-matched!");

            }
        }else{
            // wrong old password
            return redirect()->back()->withError("Wrong old Password!");
        }
    
       

    }

    public function changePassword(){

        return view('auth.change_password');
        
    }
}
