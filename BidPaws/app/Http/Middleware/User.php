<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if ($request->user()->access === 0) {
                if ($request->user()->role === 'user') {
                    return $next($request);
                } elseif ($request->user()->role === 'admin') {
                    return redirect()->route('admin.stats');
                }
            } else {
                Auth::logout();
                return redirect()->route('home')->with("error", "Your account has been banned.");
            }
        } else {
            return redirect()->route('login');
        }
        
}}
