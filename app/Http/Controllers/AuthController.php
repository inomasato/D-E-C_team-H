<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login (Request $request){

        $model = new User();
        
        if($request->session()->has('user_id')){
            $user_data =  $request->session()->get('user_data');
            return view('sharet.index');
        }else{
    
            $judge = $model->authUser($request);

            $user_data =  $request->session()->get('user_data');

            $user_id = $user_data['user_id'];
            $user_trueName =  $user_data['user_tureName'];

            if($judge){
                return view('sharet.index',['user_id' => $user_id, 'user_trueName' => $user_trueName ]);
            }
            
            return redirect('login');
           
        }

    }
}
