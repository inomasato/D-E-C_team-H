<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateControllerr extends Controller
{
    public function index(Request $request){
        $user_data = $request->session()->get('user_data');
        return view ('sharet/create',$user_data);
    }
    public function create(Request $request){
        $param =[
            'tweet_content'=>$request->tweet_content,
        ];
        DB::insert('insert into tweet (tweet_content,) values (:tweet_content)', $param);
        return redirect();
    }
}
