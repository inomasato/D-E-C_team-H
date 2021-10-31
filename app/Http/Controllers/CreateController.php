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
    // public function add(Request $request){
    //     return view ('layouts.main');
    // }
     public function create(Request $request){
        $user_data = $request->session()->get('user_data');
        var_dump([$request->tweet_content,$user_data->user_id,$request->tweet_type]);
        exit();

        // $user = DB::table('user')
        // ->join('tweet',function($join){
        //     $join->on('user.user_id','=','tweet.tweet_user_id');
        // })->get();

      

         $param =[
             'tweet_content'=>$request->tweet_content,
            'tweet_user_id'=>$user_data->user_id,
             'tweet_type'=>$request->tweet_type,
         ];
       var_dump($param);
        exit();
         DB::insert('insert into tweet (tweet_content,tweet_user_id,tweet_type) values (:tweet_content,:tweet_user_id,:tweet_type)', $param);

         
         return redirect('/sharet');
     }
}
