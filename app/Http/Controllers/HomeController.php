<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request){
        return view('layout.home');
    }

    function heroData(Request $request){
        return DB::table('heroproperties')->first();
     }
}
