<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mypage;

class MypageController extends Controller
{
    public function index(Request $request){
        $data = $request->session()->get('user_data');
        return view('mypage.index', ['user_data' => $data]);
    }
}
