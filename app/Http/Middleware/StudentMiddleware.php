<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class StudentMiddleware
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
        if(Auth::user()->usertype == 'student') 
        {
            return $next($request); 
        }
        else
        {
            return redirect('/home/'.Auth::user()->id)->with('status','you are not allowed to this page');
        }
        
    }
}