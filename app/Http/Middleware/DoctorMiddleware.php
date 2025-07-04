<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class DoctorMiddleware
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
        if(Auth::user()->usertype == 'doctor')
        {
            return $next($request);
        }
        else
        {
            return redirect('/home/'.Auth::user()->id)->with('status','you are not allowed to this page');
        }
        
    }
}
