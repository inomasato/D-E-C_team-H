<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateControllerr extends Controller
{
    public function index(Request $request){
        $tweets = DB::table('tweet')->get();
        return view ('sharet/create');
    }
}
