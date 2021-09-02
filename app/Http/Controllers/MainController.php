<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    function save(Request $request){
        
        //validate requests
        $request->validate([
            'name'=>'required',
            'username'=>'required|unique:admins',
            'email'=>'required|unique:admins',
            'password'=>'required|min:5|max:12'
        ]);

        //Insert data into database 
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->username = $request->username;
        $admin->email = $request->email;
        //$admin->password = ($request->password);
        $admin->password = ($request->password); 
        $save = $admin->save();

        if($save){
            return back()->with('success','New User has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }

    function check(Request $request){
        
        //validate requests
        $request->validate([
            'username'=>'required',
            'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('username','=', $request->username)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your username');
        }else{
            //check password
            if(!strcmp($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.dashboard', $data);
    }
}