<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
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
        $user_data = $request->session()->get('user_data');

        if(isset($user_data->user_id)){
            return $next($request);
        }else{
            return redirect('login');
        }
        
    }
}
