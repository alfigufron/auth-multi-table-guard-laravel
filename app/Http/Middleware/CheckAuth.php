<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAuth
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
        $check = false;

        if (
            Auth::guard('admin')->check() || 
            Auth::guard('teacher')->check() ||
            Auth::guard('homeroom_teacher')->check() ||
            Auth::guard('student')->check()
        ) :
            $check = true;
        endif;

        if ($check) {
            return $next($request);
        } else {
            return redirect()->route('view.login.student');
        }
    }
}
