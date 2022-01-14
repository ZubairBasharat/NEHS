<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIfMaster
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

        if (session()->has('LoggedMaster') && ($request->path() == 'master/login')){

            return redirect()->route('master.dashboard');

        }
        if (!session()->has('LoggedMaster') && ($request->path() == 'master/login')){

            return $next($request);
        }
        if (session()->has('LoggedMaster') && ($request->path() != 'master/login')){

            return $next($request);

        }
        if (!session()->has('LoggedMaster') && ($request->path() != 'master/login')){

            return redirect('master/login');
        }

        return $next($request);
    }
}
