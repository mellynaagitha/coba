<?php

namespace App\Http\Middleware;

use Closure;

class cekLoginInverse
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
        if(session('sudahLogin')){
            return redirect('adminPg');
        }
        return $next($request);
    }
}
