<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class User extends Model
{

    // 下記3つはお決まりの定義みたいに覚えていただけますと
    // テーブル名のセット
    protected $table = 'user';
    // 主キーのセット

    // 自動タイムスタンプ挿入の是非
    // trueにするとデータインサート・アップデート時に勝手にtimestamp型のカラムに値が入ります。falseだと入りません
    public $timestamps = false;

    //テーブルデータ取得のメソッド
    public function authUser(Request $request)
    {

        $loginId = $request->loginId;
        $password = $request->password;

        $user_data = DB::table($this->table)->where('user_loginId',$loginId)
        ->where('user_password',$password)->limit(1)->get();

        if(isset($user_data[0]->user_id)){
            $request->session()->put('user_id',$user_data[0]->user_id);
            $request->session()->put('user_trueName',$user_data[0]->user_trueName);
            return true;
        }else{
            return false;
        }

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
