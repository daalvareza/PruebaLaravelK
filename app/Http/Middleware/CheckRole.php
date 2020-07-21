<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
        if($request->user()->role != 1){
            return response()->json([
                "message" => "No tienes autorización para hacer esto",
                "exception" => 403
            ]);
        }
        return $next($request);
    }
}
