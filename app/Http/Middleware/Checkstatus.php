<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Checkstatus
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
        if(Auth::user()->status_id==2){
            return redirect(route('user_blocked'));
        }

        return $next($request);
    }
}
