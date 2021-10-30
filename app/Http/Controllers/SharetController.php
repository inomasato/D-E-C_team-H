<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Tweet;


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
       
        $judge_cnt = 0;

        foreach($likes as $like){
            foreach($tweets['tweets'] as $tweet){
                $like_judge[$judge_cnt] = ['like_judge' => false];
                if($like->like_tweet_id == $tweet->tweet_id){
                    $like_judge[$judge_cnt] = ['like_judge' => true];
                    break;
                }
            }
            $judge_cnt++;
            unset($tweet);
        }


     
        return view('sharet.index',['user_data',$user_data]);

    }
}
