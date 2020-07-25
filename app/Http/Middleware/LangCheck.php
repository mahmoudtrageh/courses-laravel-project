<?php

namespace App\Http\Middleware;

use Closure;

class LangCheck
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
        if ($user = auth()->guard('admin')->user()) {
            if ($user->lang) {
                app()->setLocale($user->lang);
            }
        }
        return $next($request);
    }
}
