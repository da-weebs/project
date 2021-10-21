<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Proposal;
use App\Imports\ProposalImport;

use Excel;

class FormController extends Controller
{
    public function viewform(){
        return view('form.proposalform');
    }

    public function submitform(Request $request){
        // $request->validate([
        //     'name'=>'required',
        //     'year'=>'required',
        //     'icno' =>'required',
        //     'matrixno' => 'required',
        //     'email'=>'required|email',
        //     'mobileno'=>'required',
        //     'svname'=>'required',
        //     'project_title'=>'required',
        //     'problem_solution'=>'required',
        //     'objectives'=>'required',
        //     'scopes'=>'required',
        //     'software'=>'required',
        //     'hardware'=>'required',
        //     'method'=>'required',
        //     'network' =>'required',
        //     'security'=> 'required',
        //     'area'=>'required',
        //     'owner'=>'required',
        //     'date'=>'required'
        // ]);

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
        return view('form.consentform');
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

    public function listform(){
        $proposal = DB::table('proposal_form')->get();
        return view('form.listform_proposal', compact('proposal'));
    }

    public function importForm(){
        return view('form.import-proposal');
    }

    public function import(Request $request){
        Excel::import(new ProposalImport, $request->file);
        return back()->with ("Record imported successfully");
    }

    public function uploadProposal(){
        $student = DB::table('students')->get();
        return view('form.uploadlink', compact('student'));
    }
}
