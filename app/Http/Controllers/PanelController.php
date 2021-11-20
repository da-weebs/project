<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class PanelController extends Controller
{
    public function viewDashboard(Request $request){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        //$name=$request->session()->get('LoggedUserName');
        //echo $name;
         return view('panel.dashboard',$data);
    }
}
