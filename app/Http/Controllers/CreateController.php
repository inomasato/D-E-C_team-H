<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index(Request $request){

        $user_data = $request->session()->get('user_data');
        // var_dump($user_data);
        // exit;
        return view ('sharet.create',['user_data' => $user_data]);
    }

    public function create(Request $request){

        $modelTweet = new Tweet();
        $user_data = $request->session()->get('user_data');
        $modelTweet->createTweets($user_data->user_id,$request->tweet_content,$request->tweet_type);
        return redirect('/sharet');
    }

    public function updete(Request $request){
        $modelTweet = new Tweet();
        $tweet_id = $request->tweet_id;
        $modelTweet->updareTweets($tweet_id,$request->tweet_content,$request->tweet_type);
        return redirect('/sharet');
    }
}
