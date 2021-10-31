<?php

namespace App\Models;

//Laravelで、SQL文簡単に組み立てるインターフェースをuseしています
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/*
-----------------------------
ツイート   : tweet
-----------------------------
ツイートID : tweet_id
ユーザー名 : tweet_user_id
ツイート文 : tweet_content
いいね回数 : tweet_likeCount
作成日時   : created_at
更新日時   : updated_at
削除日時   : deleted_at
-----------------------------
*/

class Tweet extends Model
{


    // 下記3つはお決まりの定義みたいに覚えていただけますと
    // テーブル名のセット
    protected $table = 'tweet';
    // 主キーのセット
    protected $guarded = ['tweet_id'];
    // 自動タイムスタンプ挿入の是非
    // trueにするとデータインサート・アップデート時に勝手にtimestamp型のカラムに値が入ります。falseだと入りません
    public $timestamps = false;

    //テーブルデータ取得のメソッド
    public function getTweets($page)
    {
     
        $tweets = DB::table($this->table)->join('user',function($join){
            $join->on('tweet.tweet_user_id','=','user.user_id');
        })->where('tweet.deleted_at',null)->orderBy('tweet.tweet_id','desc')->get();

        return ['page' => $page , 'tweets' => $tweets];

    }

    public function getUserTweets($page,$user_id)
    {

        $tweets = DB::table($this->table)->join('user',function($join){
            $join->on('tweet.tweet_user_id','=','user.user_id');
        })->where('tweet.tweet_user_id',$user_id)->where('tweet.deleted_at',null)->orderBy('tweet.tweet_id','desc')->get();

        return ['page' => $page , 'tweets' => $tweets];

    }

    public function getOneTweet($tweet_id){

        $tweet = DB::table('tweet')->join('user',function($join){
            $join->on('tweet.tweet_user_id','=','user.user_id');
        })->where('tweet.tweet_id',$tweet_id)->limit(1)->get();

        return $tweet;
    }

    public function createTweets($user_id,$tweet_content,$tweet_type){

        $param = [
            'tweet_user_id' => $user_id,
            'tweet_content' => $tweet_content,
            'tweet_type'    => $tweet_type
        ];

        return DB::table($this->table)->insert($param);
    } 

    public function updateTweets($tweet_id,$tweet_content,$tweet_type)
    {
        $param = [
            'tweet_id'      => $tweet_id,
            'tweet_content' => $tweet_content,
            'tweet_type'    => $tweet_type
        ];

        DB::table($this->table)->where('tweet_id',$tweet_id)->update($param);
    }

    public function deleteTweets(Request $request)
    {
        $param = [
            'deleted_at' => now(),
        ];

        DB::table($this->table)->where('tweet_id',$request->tweet_id)->update($param);
    }

}