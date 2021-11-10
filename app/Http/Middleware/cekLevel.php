<?php

namespace App\Http\Middleware;

use Closure;

class cekLevel
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
        if(session('level') == '2'){
            return redirect('adminPg');
        }
        return $next($request);
    }
}
