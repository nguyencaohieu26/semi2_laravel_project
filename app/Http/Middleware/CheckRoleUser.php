<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class CheckRoleUser
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if(strcmp(Auth::user()->role,"USER") !== 0){
            return redirect()->route('home-index');
        }
        return $next($request);
    }
}
