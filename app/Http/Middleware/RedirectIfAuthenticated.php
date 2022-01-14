<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if(Auth::user()->hasRole('Admin'))
                {

                    return redirect(RouteServiceProvider::HOME2);

                }
                else if(Auth::user()->hasAnyRole('3','4','5','6','7','8','9','10'))
                {
                    update_login(Auth::user()->id);
                    return redirect(RouteServiceProvider::HOME3);

                }else{
                    return redirect(RouteServiceProvider::HOME);
                }
            }
        }

        return $next($request);
    }
}
