<?php

namespace App\Http\Middleware;

use Closure;

// class checkAge
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \Closure  $next
//      * @return mixed
//      */
//     public function handle($request, Closure $next)
//     {
//         return $next($request);
//     }
// }

class CheckAge{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if ($request->age <= 200) {
        //     echo "hello world";  
        // }

        echo "hello world";  
        return $next($request);
    }
}