<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{
    public function index(Request $request){
        $user_data = $request->session()->get('user_data');
        // var_dump($user_data);
        // exit;
        return view ('sharet.create',['user_data' => $user_data]);
    }
    public function add(Request $request){
        return view ('sharet.create');
    }
     public function create(Request $request){
         $param =[
             'tweet_content'=>$request->tweet_content,
         ];
         DB::insert('insert into tweet (tweet_content) values (:tweet_content)', $param);
         return redirect('/sharet');
     }
}
