<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
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
        if($request->session()->has('ADMIN_LOGIN'))
        {
             //return  redirect("admin/dashboard");

        }
        else
        {
            $request->session()->flash("error","access denied");
        return  redirect("admin");
        }
        return $next($request);
    }
}
