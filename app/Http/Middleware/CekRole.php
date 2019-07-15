<?php

namespace App\Http\Middleware;

use Closure;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roleName)
    {
        if((\Session::get('as'))!=$roleName)
        {
            return redirect()
                ->to('access_denied');
        }
        return $next($request);
    }
}
