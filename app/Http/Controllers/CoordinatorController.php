<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class CoordinatorController extends Controller
{
    public function lecturer(){
        $students = DB::table('students')->get();
        $lecturers = DB::table('admins')->where('level','=',3)->get();

        return view('coordinator.lecturer', compact('lecturers'));
    }

    public function assignsv(){
        $students = DB::table('students')->get();
        $lecturers = DB::table('admins')->where('level','=',3)->get();

        return view('coordinator.assignsv', compact('lecturers','students'));
    }

    public function updatesv(Request $request){
        DB::table('students')->where('studname', $request->students)->update([
            'lecturername'=> $request->lecturer
        ]);

        
        return back()->with('success','Student updated successfully');
    }
}
