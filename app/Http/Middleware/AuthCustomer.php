<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guard('customer')->check())
        {
            // dd("aaaaaaaaaaaaaaaaaaaaa");
            return $next($request);
        }
        else {
            // dd("bbbbbbbbbbbbbb"a)
          return redirect('dang-nhap-nguoi-dung');
        }
    }
}
