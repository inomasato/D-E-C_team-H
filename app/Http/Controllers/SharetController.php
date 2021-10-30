<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SharetController extends Controller
{
    public function index(Request $request)
    {

        $modelTweet = new Tweet();
        $page = 0;
        if(isset($request->page)) $page = $request->page * 25;
        
        $user_data = $request->session()->get('user_data');
        $tweets = $modelTweet->getTweets($page);
        

        return view('sharet.index',['user_data',$user_data]);

    }
}
