<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
class formateurMiddleware
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
        if(Sentinel::check() &&  Sentinel::getUser()->roles()->first()->slug=='formateur'){


            return $next($request);
        }
           else {
            
            if (Sentinel::check()) {
                $user=Sentinel::getUser()->roles()->first()->slug;
            return redirect('/'.$user.'home');
            } else {
              
            return redirect('/login');
            }
            
        }
    }
    
}
