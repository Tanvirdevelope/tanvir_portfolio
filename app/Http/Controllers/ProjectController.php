<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index(Request $request){
        return view('layout.projects');
    }
    function projectsData(Request $request){
        return DB::table('projects')->get();
    }
}
