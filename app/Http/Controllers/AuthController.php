<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login (Request $request){

        $model = new User();
        
        if($request->session()->has('user_id')){
            $items = ['user_id' => $request->session()->get('user_id'),
                      'user_trueName'  =>  $request->session()->get('user_trueName'),
            ];
        
            return view('sharet.index',$items);
        }else{
    
            $judge = $model->authUser($request);

            $user_id = $request->session()->get('user_id');
            $user_trueName =  $request->session()->get('user_tureName');

            if($judge){
                return view('sharet.index',['user_id' => $user_id, 'user_trueName' => $user_trueName ]);
            }
            
            return redirect('login');
           
        }

    }
}
