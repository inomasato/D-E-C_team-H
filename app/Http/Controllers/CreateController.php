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
         return view ('layouts.main');
     }
     public function create(Request $request){
        $user_data = $request->session()->get('user_data');
        // var_dump([$request->tweet_content,$user_data->user_id,$request->tweet_type]);
        // exit();

        // $user = DB::table('user')
        // ->join('tweet',function($join){
        //     $join->on('user.user_id','=','tweet.tweet_user_id');
        // })->get();

      

         $param =[
             'tweet_id'=>$request->tweet_id,
             'tweet_content'=>$request->tweet_content,
             'tweet_user_id'=>$user_data->user_id,
             'tweet_type'=>$request->tweet_type,
             'tweet_likeCount'=>$request->tweet_likeCount,
             'tweet_replyCount'=>$request->tweet_replyCount,
         ];
        // var_dump($param);
        //   exit();
         DB::insert('insert into tweet (tweet_content,tweet_user_id,tweet_type,tweet_likeCount,tweet_replyCount,created_at,updated_at,deleted_at) values (:tweet_content,1,:tweet_type,0,0, now(),now(),now() ', $param);
        

         
         return redirect('/sharet');
     }
}
