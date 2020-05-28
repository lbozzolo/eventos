<?php

namespace Eventos\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Auth;
use Cache;

class LastUserActivity
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
        if (Auth::check()){
            $expiresAt = Carbon::now()->addMinutes(120);
            Cache::put('user-is-online'.Auth::user()->id, true, $expiresAt);
        }
        return $next($request);
    }
}
