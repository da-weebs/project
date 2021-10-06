<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imports\StudentImport;
use App\Models\Proposal;
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
        return view('student.studentList', compact('students'));
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

    public function viewform(){
        return view('student.proposalform');
    }

    public function submitform(Request $request){
        $request->validate([
            'name'=>'required',
            'year'=>'required',
            'icno' =>'required',
            'matrixno' => 'required',
            'email'=>'required|email',
            'mobileno'=>'required',
            'svname'=>'required',
            'project-title'=>'required',
            'problem-solution'=>'required',
            'objectives'=>'required',
            'scopes'=>'required',
            'software'=>'required',
            'hardware'=>'required',
            'method'=>'required',
            'network' =>'required',
            'security'=> 'required',
            'area'=>'required',
            'owner'=>'required',
            'date'=>'required'
        ]);

        // DB::table('proposal_form')->insert([
        //     'name'=>$request->name,
        //     'year'=>$request->year,
        //     'ic' =>$request->icno,
        //     'matrix' => $request->matrixno,
        //     'email'=>$request->email,
        //     'mobileno'=>$request->mobileno,
        //     'svname'=>$request->svname,
        //     'project_title'=>$request->project_title,
        //     'problem_solution'=>$request->problem_solution,
        //     'objectives'=>$request->objectives,
        //     'scopes'=>$request->scopes,
        //     'software'=>$request->software,
        //     'hardware'=>$request->hardware,
        //     'method'=>$request->method,
        //     'network' =>$request->network,
        //     'security'=> $request->security,
        //     'project_type'=> $request->project_type,
        //     'project_area'=>$request->area,
        //     'project_idea'=>$request->owner,
        //     'date'=>$request->date
        // ]);

        $proposal = new Proposal;

        
            $proposal->name=$request->name;
            $proposal->year=$request->year;
            $proposal->ic =$request->icno;
            $proposal->matrix = $request->matrixno;
            $proposal->email=$request->email;
            $proposal->mobileno=$request->mobileno;
            $proposal->svname=$request->svname;
            $proposal->project_title=$request->project_title;
            $proposal->problem_solution=$request->problem_solution;
            $proposal->objectives=$request->objectives;
            $proposal->scopes=$request->scopes;
            $proposal->software=$request->software;
            $proposal->hardware=$request->hardware;
            $proposal->method=$request->method;
            $proposal-> network =$request->network;
            $proposal->security= $request->security;
            $proposal->project_type= $request->project_type;
            $proposal->project_area=$request->area;
            $proposal->project_idea=$request->owner;
            $proposal->date=$request->date;
    
        $save = $proposal->save();

        if($save)
        return back()->with('success','New Student has been successfuly added to database');
    }

    public function viewconsentform(){
        return view('student.consentform');
    }

    public function submitconsentform(Request $request){
        $request->validate([
            'name'=>'required',
            'year'=>'required',
            'icno' =>'required',
            'matrixno' => 'required',
            'email'=>'required|email',
            'mobileno'=>'required',
            'date'=>'required'
        ]);

        $proposal = new Proposal;

            $proposal->name=$request->name;
            $proposal->year=$request->year;
            $proposal->ic =$request->icno;
            $proposal->matrix = $request->matrixno;
            $proposal->email=$request->email;
            $proposal->mobileno=$request->mobileno;
            $proposal->svname=$request->svname;
            $proposal->project_title=$request->project_title;
            $proposal->problem_solution=$request->problem_solution;
            $proposal->objectives=$request->objectives;
            $proposal->scopes=$request->scopes;
            $proposal->software=$request->software;
            $proposal->hardware=$request->hardware;
            $proposal->method=$request->method;
            $proposal-> network =$request->network;
            $proposal->security= $request->security;
            $proposal->project_type= $request->project_type;
            $proposal->project_area=$request->area;
            $proposal->project_idea=$request->owner;
            $proposal->date=$request->date;
    
        $save = $proposal->save();

        if($save)
        return back()->with('success','New Student has been successfuly added to database');
    }

}
