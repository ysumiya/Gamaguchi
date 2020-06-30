<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        'payment/*',
    ];

    public function handle($request, \Closure $next)
    {
        if (in_array(env('APP_ENV'), ['pentest'])) {
            return $next($request);
        }

        return parent::handle($request, $next);
    }
}
