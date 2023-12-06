<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index(Request $request){
        return view('layout.contact');
    }

    function contactRequest(Request $request){
        return DB::table('contacts')->insert($request->input());
    }
}
