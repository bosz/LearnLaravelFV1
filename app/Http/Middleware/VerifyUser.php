<?php

namespace App\Http\Middleware;

use Closure;

class VerifyUser
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
        // Make a database query, 
        // Check some records
        // Get input from a form
        // Perform other checks here. 

        if ($request->get('token') != 'token_here') {

            // Redirect to home page telling user he has not privileges to go on.
            echo " I pitty you";
            // abort(401);
        }

        return $next($request); // COntinue processing
    }
}
