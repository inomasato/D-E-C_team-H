<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login (Request $request){

        $model = new User();
        
        if(session()->has('user_id')){
            return view('sharet.index');
        }else{
    
            $judge = $model->authUser($request);

            $items = ['user_id' => $request->session()->get('user_id'),
                      'user_id' =>  $request->session()->get('user_tureName'),
            ];

            if($judge){
                return view('sharet.index',['items' => $items]);
            }
            
            return redirect('login');
           
        }

    }
}
