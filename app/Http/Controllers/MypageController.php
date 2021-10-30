<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mypage;

class MypageController extends Controller
{
    public function index(Request $request){
        $user_Data = $request->session()->put('userData');
        return view('mypage.index', ['user_data' => $user_Data]);
    }
}
