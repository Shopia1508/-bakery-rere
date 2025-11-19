<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    
    public function handle(Request $request, Closure $next): Response
    {
        
        if (!session()->has('admin_logged_in')) {
            return redirect('/admin/dashboard');
        }

        return $next($request);
    }
    
}
