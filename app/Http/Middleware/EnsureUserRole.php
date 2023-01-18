<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class EnsureUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
//         $role = array_slice(func_get_args(),2);
// foreach ($role as $rule) {
//     $user = \Auth::user()->rule;
//     if ($user == $rule) {
//         return $next($request);
//     }
// }
// return redirect('/');

        $user = Auth::user();
        if (($role == 'admin' && !$user->role) || ($role == 'user' && $user->role) || ($role == 'mentor' && $user->role)) {
            // abort(403);
        }
        return $next($request);
    }
}
