<?php

namespace App\Http\Middleware;

use Closure;

class ChangeLang
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
        if (session()->has('lang'))
        {
            $lang = session()->get('lang');
            app()->setLocale($lang);
        }
        return $next($request);
    }
    
}
