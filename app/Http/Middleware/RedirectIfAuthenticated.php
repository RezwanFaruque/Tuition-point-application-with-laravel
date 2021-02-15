<?php

namespace App\Http\Middleware;

// use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->is_gurdian == '1'){
                return redirect()->route('gurdian.home');
            }elseif (Auth::user()->is_tutor == '1') {
                return redirect()->route('tutor.home');
            }elseif (Auth::user()->is_admin == '1') {
                return redirect()->route('admin.home');
            }
        }

        return $next($request);
    }
}
