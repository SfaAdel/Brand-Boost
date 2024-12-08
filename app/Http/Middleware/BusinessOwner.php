<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class BusinessOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('business_owner')->check()) {
            // Add debug log to confirm
            Log::info('Business Owner Authenticated: ' . Auth::guard('business_owner')->user()->id);
            return $next($request);
        }
    
        Log::info('Business Owner Not Authenticated');
        return redirect()->route('signIn');
    }
    
}


