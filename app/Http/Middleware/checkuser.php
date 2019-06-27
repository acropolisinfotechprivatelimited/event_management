<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;

class checkuser
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
        if($request->session()->get('name') === null){
            return redirect('/admin');
        }
        return $next($request);

    }
}
