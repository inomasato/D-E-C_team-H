<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

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

        return $next($request);
    }
}
