<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Follower;

class FollowerController extends Controller
{
    public function index(Request $request){
        $user_id = $request->session()->get('user_id');
        $items = Follower::all();
        return view('follower.index', ['items' => $items]);
    }
}
