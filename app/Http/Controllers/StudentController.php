<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imports\StudentImport;

use Excel;


class StudentController extends Controller
{
  
    public function addStudent()
    {
        return view('student.addstudent');
    }

    public function saveStudent(Request $request)
    {   
        $request->validate([
            'name'=>'required',
            'course'=>'required',
            'email'=>'required|email',
            'phone'=>'required'
            //'password'=>'required|min:5|max:12'
        ]);

        DB::table('students')->insert([
            'studname'=> $request->name,
            'course'=>$request->course,
            'email'=>$request->email,
            'phone'=>$request->phone
        ]);
            return back()->with('success','New Student has been successfuly added to database');

        //return back()->with('student_add','Student added successfully'); //session to pass to view page.
    }

    public function studentList(){
        $students = DB::table('students')->get();
        //return view('student.studentList', compact('students'));

        // $hq = $students->courses_id;
        // dd($hq);
        return view('student.studentList')->with('students',$students);
    }

    public function studentEdit($id){
        $students = DB::table('students')->where('id', $id)->first(); //fetch first record using id
        return view('student.editstudent', compact('students'));

    }

    public function updateStudent(Request $request){
        DB::table('students')->where('id', $request->id)->update([
            'studname'=> $request->name,
            'course'=>$request->course,
            'email'=>$request->email,
            'phone'=>$request->phone
        ]);
        return back()->with('success','Student updated successfully');
    }

    public function studentDelete($id){
            DB::table('students')->where('id', $id)->delete();
            return back()->with('success', "Student deleted successfully");
    }

    public function importForm(){
        return view('student.import-form');
    }

    public function import(Request $request){
        Excel::import(new StudentImport, $request->file);
        return back()->with('success',"Record are imported successfully");
    }

   
}
