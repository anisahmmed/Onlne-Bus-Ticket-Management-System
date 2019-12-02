<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Checkagent
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

        if(Auth::user()->role_id ==2){
            return redirect(route('user_dashboard'));
        }

        return $next($request);
    }
}
