<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TweetController extends Controller
{
  public function index(Request $request)
  {
    // Tweetモデルのインスタンス化
    $md = new Tweet();
    // データ取得(Tweetモデルに定義したメソッド)
    $data = $md->getTweets();

    // ビューを返す
    // tweet.blade.phpというviewで使用するitemsという変数に取得したデータを渡しています。
    return view('tweet', ['items' => $data]);
  }


  public function edit()
  {
    // Tweetモデルのインスタンス化
    $md = new Tweet();
    // データ取得(Tweetモデルに定義したメソッド)
    $data = $md->getData();



    // ビューを返す
    // tweet.blade.phpというviewで使用するitemsという変数に取得したデータを渡しています。
    return view('tweet', ['items' => $data]);
  }
}