<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
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

        $response = $next($request);
        $content = $response->content();

        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern,$replace,$content);
        
        $response->setContent($content);

        return $response;

        /*
        $data = [
            ['name' => 'マドカ ダイゴ' , 'mail' => 'tiga-1996guts@east.tpc.jp'],
            ['name' => 'アスカ シン' , 'mail' => 'dyna-1997super@earth.tpc.jp'],
            ['name' => '高山 我夢' , 'mail' => 'gaia-1998xig@ariel.guard.earth']
        ];

        $request['data'] = $data;
        return $next($request);
        */
    }
}
