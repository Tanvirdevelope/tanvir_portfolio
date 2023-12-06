<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index(Request $request){
        return view('layout.about');
    }

    function aboutData(Request $request){
        return DB::table('abouts')->first();
    }
    function socialData(Request $request){
        return DB::table('socials')->first();
    }
}
