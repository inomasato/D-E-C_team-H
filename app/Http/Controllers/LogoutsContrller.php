<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutsController extends Controller
{
    public function logout(Request $request){
        return view('logins.logout', $request->session()->flush());
    }
}