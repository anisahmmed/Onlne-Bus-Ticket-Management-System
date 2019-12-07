<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Checkrole
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

        if(Auth::user()->role_id==1){
            return redirect(route('admin_dashboard'));

        }
        elseif (Auth::user()->role_id==2) {
            return redirect(route('agent_dashboard'));
        }        
        elseif (Auth::user()->role_id==3) {
            return redirect(route('bus_info'));
        }
        else{
            return redirect(abort(404));
        }

        // if(Auth::user()->role_id==2){
        //     return redirect(route('agent_dashboard'));
        // }
        // if(Auth::user()->role_id==3){
        //     return redirect(route('user_dashboard'));
        // }

        return $next($request);
    }
}
