<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AddResponseHeaders
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
	$response = $next($request);


	if (Auth::check()) {
		$state = "logged-in";
	} else {
		$state = "logged-out";
	}	
	$response->header('Login-State', $state);

        return $response;
    }
}
