<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    function register1(){
        return view('auth.register1');
    }

    function register2(){
        return view('auth.register2');
    }

    function save(Request $request){

        //validate requests
        $request->validate([
            'usertype'=>'required',
            'name'=>'required',
            'username'=>'required|unique:admins',
            'email'=>'required|unique:admins|email'
            //'password'=>'required|min:5|max:12'
        ]);

        //Insert data into database 
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->password=Str::random(8);
        $request->password=$admin->password;
        $admin->log = 0;
        $admin->students = 0;

        $userlevel = $request->usertype;
        if($userlevel=='Coordinator')
        $admin->level = 2;
        else if($userlevel=='Admin')
        $admin->level = 1;
        else if($userlevel=='Lecturer')
        $admin->level = 3;

        $save = $admin->save();

        if($save){
            MailController::sendEmail($request);
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
                $request->session()->put('LoggedUser',$userInfo->id);
                $request->session()->put('LoggedUserName',$userInfo->name);
                $request->session()->put('LoggedPassword',$userInfo->password);
                Admin::where('username','=', $request->username)->update([
                    'log'=> 1
                ]);
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
        $userlevel=$data['LoggedUserInfo']->level;

        if($userlevel==1){
        session()->put('UserLevel',$userlevel);
        return view('admin.dashboard', $data);
        }
        else if($userlevel==2){
        session()->put('UserLevel',$userlevel);
        return view('coordinator.dashboard', $data);
        }
        else if($userlevel==3)
        session()->put('UserLevel',$userlevel);
        return view('lecturer.dashboard', $data);
    }
    
    function changepassword(){
        return view('admin.changepassword');
    }

    function savepassword(Request $request){
        $request->validate([
            'currentpassword'=>'required|min:5',
            'newpassword'=>'required|min:5|max:12'
        ]);

        // $data=Admin::where('id','=',session('LoggedPassword'));
        // if(!strcmp($data->password, $request->currentpassword)){
        //     return back()->with('fail','Incorrect password');
        // }


        Admin::where('id','=',session('LoggedUser'))->update([
            'password'=> $request->newpassword
        ]);
        
        return view('admin.changepassword')->with('success','Password has been successfuly changed');
        // return back()->with('success','Password has been successfuly changed');
    }

    function viewuser(){
        $users = DB::table('admins')->get();
        return view('admin.viewuser', compact('users'));
    }
}