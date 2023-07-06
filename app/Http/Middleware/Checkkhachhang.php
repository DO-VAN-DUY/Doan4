<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class Checkkhachhang
{
    private $cus;
    public function __construct()
    {
        
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,$quard = 'cus')
    {
        if(Auth::guard($quard)->check())
        {
            return $next($request);
        }
        return redirect()->round('home')->with('error','Bạn cần đăng nhập');
        
    }
}
