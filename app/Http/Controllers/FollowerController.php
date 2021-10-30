<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Follower;

class FollowerController extends Controller
{
    public function index($request){
        $user_id = $request->session()->get('user_id');
        // $items = DB::select('select * from follower inner join user on follower.follow_user_id = user.user_id');
        $items = Follower::all();
        return view('follower.index', ['items' => $items]);
    }
}
