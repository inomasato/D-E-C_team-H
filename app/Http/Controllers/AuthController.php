<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login (Request $request){

        $model = new User();
        
        if(session()->has('user_id')){

            $items['css'] = 'index';
            return view('sharet.index',['items'=>$items]);

        }else{

            $judge = $model->authUser($request);

            if(!$judge) return redirect('/login');

            $items['css'] = 'index';

            return view('sharet.index',['items'=>$items]);
           
        }

    }
}
