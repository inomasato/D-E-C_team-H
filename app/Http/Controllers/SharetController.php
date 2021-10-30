<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Tweet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SharetController extends Controller
{
    public function index(Request $request)
    {

        $modelTweet = new Tweet();
        $modelLike  = new Like();

        $page = 0;

        if(isset($request->page)) $page = $request->page * 25;
        
        $user_data = $request->session()->get('user_data');
        $tweets = $modelTweet->getTweets($page);
        
        $likes = $modelLike->getLike($user_data->user_id,$user_data->user_likeCount);

        $like_judge = [[]];

        foreach($likes as $like){
            foreach($tweets as $tweet){
                if($like->like_tweet_id == $tweet->tweet_id){
                    $like_judge[count($like_judge)]['like_judge'] = true;
                }else{
                    $like_judge[count($like_judge)]['like_judge'] = false;  
                }
            }
            unset($tweet);
        }
        
        var_dump($like_judge);
        exit;

        return view('sharet.index',['user_data',$user_data]);

    }
}
