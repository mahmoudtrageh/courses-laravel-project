<?php

namespace App\Http\Middleware;

use Closure;

class AdminPermissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role_id)
    {
               $user = auth()->guard('admin')->user();

        if (in_array($role_id, $user->roles->pluck('id')->toArray())
            || $user->id == 1) {
            return $next($request);
        }
        return redirect()->route('admin-index')->withErrors('ليس لديك صلاحيات لهذه الصفحه');

    }
}
