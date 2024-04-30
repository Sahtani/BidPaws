<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if ($request->user()->role === 'admin') {
                return $next($request);
            } elseif ($request->user()->role === 'user') {
                return redirect()->route('user.create');
            }
        }
        return redirect()->route('unauthorized');
    }
}
