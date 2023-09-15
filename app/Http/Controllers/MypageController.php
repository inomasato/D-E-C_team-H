<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Tweet;
use Illuminate\Http\Request;
class MypageController extends Controller
{

    public function index(Request $request){

        $modelTweet = new Tweet();
        $modelLike  = new Like();
        $user_data = $request->session()->get('user_data');
        $user_id = $request->other_id;

        if($user_id == $user_data->user_id){
            $user_judge = 1;
        }else{
            $user_judge = 0;
        }
        
        $page = 0;

        if(isset($request->page)) $page = $request->page * 25;
        
        // $user_data = $request->session()->get('user_data');
        $tweets = $modelTweet->getTweets($page);
        
        $likes = $modelLike->getLike(2,2);
        // $user_data->user_id,
        // $user_data->user_likeCount
        $judge_cnt = 0;
        


        foreach($likes as $like){
            foreach($tweets['tweets'] as $tweet){
                $like_judge[$judge_cnt] = ['like_judge' => 0];
                if($like->like_tweet_id == $tweet->tweet_id){
                    $like_judge[$judge_cnt] = ['like_judge' => 1];
                    break;
                }
            }
            $judge_cnt++;
            unset($tweet);
        }

        $convert = [];
        $i = 0;
        foreach($tweets["tweets"] as $tweet){
             $convert[$i++] = (array)$tweet;
        }
   
        for($i=0; $i<count($like_judge); $i++){
            $items[$i] = array_merge($like_judge[$i],$convert[$i]);
        }
        // var_dump($user_judge);
        // exit();

        return view('mypage.index', ['items' => $items,'user_judge' => $user_judge, $tweets]);
    }
}
