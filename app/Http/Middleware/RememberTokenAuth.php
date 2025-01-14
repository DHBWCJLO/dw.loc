<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class RememberTokenAuth
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
        // Extract the Bearer token from the Authorization header
        $token = $request->header('Authorization');

        if ($token && strpos($token, 'Bearer ') === 0) {
            $token = substr($token, 7); // Remove 'Bearer ' prefix

            // Find the user with the matching remember_token
            $user = User::where('remember_token', $token)->first();

            if ($user) {
                // Authenticate the user for this request
                auth()->setUser($user);
                return $next($request);
            }
        }

        // If authentication fails, return a 401 Unauthorized response
        return response()->json(['message' => 'Unauthorized'], 401);
    }
}
