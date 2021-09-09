<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class CoordinatorController extends Controller
{
    public function assignstudent(){
        $students = DB::table('students')->get();
        return view('coordinator.assignstudent', compact('students'));
    }
}
