<?php

namespace App\Http\Middleware;

use Closure;
// use Illuminate\Support\Facades\Auth;

class isTutor
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
        if(auth()->user()->is_tutor == 1){
            return $next($request);
        }
        return redirect()->route('home')->with('error',"You are Loged in as a Tutor not as a Gurdian");
    }
}
