<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
use User;
class vistorMiddleware
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
        if(!Sentinel::check())
             return $next($request);
        else
        {
             
            $user=Sentinel::getUser()->roles()->first()->slug;
            return redirect('/'.$user.'home');
        }
    }
}
