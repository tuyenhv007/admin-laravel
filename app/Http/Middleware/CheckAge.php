<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAge
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
        $userLogin = Auth::user();

        $age = Carbon::parse($userLogin->birthday)->age;
        if ($age < 18) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
