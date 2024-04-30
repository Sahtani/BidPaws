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
            // Vérifier le rôle de l'utilisateur
            if ($request->user()->role === 'user') {
                // L'utilisateur est un utilisateur normal, laissez-le passer
                return $next($request);
            } elseif ($request->user()->role === 'admin') {
                // L'utilisateur est un administrateur, redirigez-le vers la page d'administration
                return redirect()->route('admin.categories');
            }
        }
    
        // Si l'utilisateur n'est pas authentifié ou n'a pas le bon rôle, afficher une erreur d'autorisation
        return redirect()->route('unauthorized');
}}
