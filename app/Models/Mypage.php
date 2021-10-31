<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mypage extends Model
{
    public function getTweets($page)
    {
     
        $tweets = DB::table($this->table)->join('user',function($join){
            $join->on('tweet.tweet_user_id','=','user.user_id');
        })->where('tweet.deleted_at',null)->orderBy('tweet.tweet_id','desc')->offset($page)->limit(25)->get();

        return ['page' => $page , 'tweets' => $tweets];

    }

    public function getUserTweets($page,$user_id)
    {

        $tweets = DB::table($this->table)->join('user',function($join){
            $join->on('tweet.tweet_user_id','=','user.user_id');
        })->where('tweet.tweet_user_id',$user_id)->where('tweet.deleted_at',null)->orderBy('tweet.tweet_id','desc')->offset($page)->limit(25)->get();
        var_dump($tweets);
    exit();

        return ['page' => $page , 'tweets' => $tweets];

    }

    public function updateTweets($request)
    {
        $param = [
            'tweet_content' => $request->tweet_content,
        ];

        DB::table($this->table)->where('tweet_id',$request->tweet_id)->update($param);
    }

    public function deleteTweets($request)
    {
        $param = [
            'deleted_at' => now(),
        ];

        DB::table($this->table)->where('tweet_id',$request->tweet_id)->update($param);
    }
}
