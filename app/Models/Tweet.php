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
    public $timestamps = true;

    //テーブルデータ取得のメソッド
    public function getTweets(Request $request)
    {

        $page = $request->page * 25; 
        $tweets = DB::table($this->table)->where('deleted_at',null)->
        orderBy('tweet_id','desc')->offset($page)->limit(25)->get();

        return ['page' => $page , 'tweets' => $tweets];

    }

    public function getUserTweets(Request $request)
    {

        $page = $request->page * 25; 
        $tweets = DB::table($this->table)->where('tweet_user_id',$request->target)->where('deleted_at',null)
        ->orderBy('tweet_id','desc')->offset($page)->limit(25)->get();

        return ['page' => $page , 'tweets' => $tweets];

    }

    public function addTweets(Request $request)
    {

        $param = [
            'tweet_user_id' => $request->tweet_user_id,
            'tweet_content' => $request->tweet_content,
        ];

        DB::table($this->table)->insert($param);

    }

    public function updateTweets(Request $request)
    {
        $param = [
            'tweet_content' => $request->tweet_content,
        ];

        DB::table($this->table)->where('tweet_id',$request->tweet_id)->update($param);
    }

    public function deleteTweets(Request $request)
    {
        $param = [
            'deleted_at' => now(),
        ];

        DB::table($this->table)->where('tweet_id',$request->tweet_id)->update($param);
    }

}