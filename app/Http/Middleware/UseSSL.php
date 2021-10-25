<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Redirect;
use Illuminate\Http\Request;

class UseSSL
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if( App::environment('local') ){
             Redirect::secure($request->path());
        }

        return $next($request);
    }
}
