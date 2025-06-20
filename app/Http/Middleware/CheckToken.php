<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->header('Authorization');

        // Expecting the header in the form "Bearer test_token_12345"
        if (!$token || $token !== 'Bearer test_token_12345') {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
