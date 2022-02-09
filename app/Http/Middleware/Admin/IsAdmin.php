<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
   
    public function handle(Request $request, Closure $next)
    {
        // ensure that this is an admin user
        // get current user data
        if(auth()->user()->is_admin)  // true
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('categories.list');
        }

    }
}
