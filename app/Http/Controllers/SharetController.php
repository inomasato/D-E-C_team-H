<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Traits\EnumeratesValues;
use App\Models\Like;
use App\Models\Reply;
use App\Models\Tweet;


class SharetController extends Controller
{
    public function index(Request $request)
    {

        $modelTweet = new Tweet();
        $modelLike  = new Like();

        $page = 0;

        if(isset($request->page)) $page = $request->page * 25;
        
        // $user_data = $request->session()->get('user_data');
        $tweets = $modelTweet->getTweets($page);
        
        // $likes = $modelLike->getLike(2,);
        // // $user_data->user_id,
        // // $user_data->user_likeCount
        // $judge_cnt = 0;


        // foreach($likes as $like){
        //     foreach($tweets['tweets'] as $tweet){
        //         $like_judge[$judge_cnt] = ['like_judge' => 0];
        //         if($like->like_tweet_id == $tweet->tweet_id){
        //             $like_judge[$judge_cnt] = ['like_judge' => 1];
        //             break;
        //         }
        //     }
        //     $judge_cnt++;
        //     unset($tweet);
        // }

        $convert = [];
        $i = 0;
        foreach($tweets["tweets"] as $tweet){
             $convert[$i++] = (array)$tweet;
        }
   
        // for($i=0; $i<count($like_judge); $i++){
        //     $items[$i] = array_merge($like_judge[$i],$convert[$i]);
        // }
        

        return view('/sharet.index',['items'=>$convert]);
    }

    public function reply (Request $request){

        

        $modelTweet = new Tweet();
        $modelReply = new Reply();

        if($request->has('delete_id')){
            $modelReply->deleteReply($request->delete_id);
        }

        $user_data = $request->session()->get('user_data');

        $tweet = $request->tweet_id;
  
        $tweet = $modelTweet->getOneTweet($request->tweet_id);
        $like_judge[0] = ['like_judge' => $request->like_judge];
        
        $items[0] = (array)array_merge($like_judge[0], (array)$tweet[0]);

        $replys = $modelReply->getReply($items[0]['tweet_id'],$items[0]['tweet_replyCount']);
        $replys = (array)$replys;
        $i=0;

        $template = $modelReply->getTemplate();

        foreach($replys as $item){
            foreach($item as $row){
                $convert[$i][] = (array)$row;
            }
            $i++;
        }

        $i=0;
        
        foreach($template as $temps){
            foreach($temps as $temp){
                $words[$i][] = (array)$temp;
            }
            $i++;
        }

        if(!isset($convert)){
            $convert = [""];
        }
        
        // var_dump($convert[0]);
        // exit();
    
        return view('/sharet.reply',['items'=>$items,'replys' => $convert[0],'ture_user_id' => $user_data->user_id,'template' => $words[0]]);

    }

    public function addReply(Request $request){
        $modelReply = new Reply();
        $user_data = $request->session()->get('user_data');
        $modelReply->addReply($request->tweet_id,$user_data->user_id,$request->template_id);
        return redirect('/sharet');
    }

}