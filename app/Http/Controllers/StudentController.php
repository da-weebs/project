<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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

    



    // public function index()
    // {
    //     $students = Student::latest()->paginate(5);
    //     return view('students.index', compact('students'))
    //             ->with('i', (request()->input('page',1) - 1) * 5);
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('students.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'studname' => 'required',
    //         'course' => 'required',
    //         'fee' => 'required'
    //     ]);
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Student  $student
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Student $student)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Student  $student
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Student $student)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Student  $student
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Student $student)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Student  $student
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Student $student)
    // {
    //     //
    // }
}
