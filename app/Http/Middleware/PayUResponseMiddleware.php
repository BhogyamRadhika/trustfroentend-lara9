<?php

namespace App\Http\Middleware;

use Closure;

class PayUResponseMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->is('payu/response')) {
            return $next($request);
        }

        return abort(403, 'Unauthorized access');
    }
}
