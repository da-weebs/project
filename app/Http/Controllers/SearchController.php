<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function search(Request $request){

        if(isset($_GET['query'])){
            
            $search_text = $_GET['query'];
            $name = DB::table('students')->where('studname', 'LIKE', '%' .$search_text. '%')->paginate(2);
            $course = DB::table('students')->where('course', 'LIKE', '%' .$search_text. '%')->paginate(2);
            $sv = DB::table('students')->where('lecturername', 'LIKE', '%' .$search_text. '%')->paginate(2);
            $psm = DB::table('students')->where('sessionpsm', 'LIKE', '%' .$search_text. '%')->paginate(2);
            $matric = DB::table('students')->where('matric', 'LIKE', '%' .$search_text. '%')->paginate(2);
            return view('search', ['name'=>$name,'course'=>$course, 'cohort'=>$sv, 'psm'=>$psm, 'matric'=>$matric]);
        }
        else{
            return view('search');
        }
    }
}
