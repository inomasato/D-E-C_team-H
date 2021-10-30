<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login (Request $request){

        $model = new User();
        
        if($request->session()->has('user_id')){
            $user_data =  $request->session()->get('user_data');
            $ctr = app()->make('App\Http\Controllers\SharetController');
            $ctr->index($request);
        }else{
    
            $judge = $model->authUser($request);

            $user_data =  $request->session()->get('user_data');

            if($judge){
                
                $modelTweet = new Tweet();
                $modelLike  = new Like();
        
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
        
                $i = 0;
                foreach($tweets["tweets"] as $tweet){
                     $convert[$i++] = (array)$tweet;
                }
           
                for($i=0; $i<count($like_judge); $i++){
                    $items[$i] = array_merge($like_judge[$i],$convert[$i]);
                }
                
        
                return view('/sharet.index',['items'=>$items]);
            }
            
            return redirect('login');
           
        }

    }
}
