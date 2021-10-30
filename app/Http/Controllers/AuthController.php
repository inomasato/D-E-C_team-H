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
            return view('sharet.index',['user_data'=>$user_data]);
        }else{
    
            $judge = $model->authUser($request);

            $user_data =  $request->session()->get('user_data');

            if($judge){
                return view('sharet.index',['user_data'=>$user_data]);
            }
            
            return redirect('login');
           
        }

    }
}
