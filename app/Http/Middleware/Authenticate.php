<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if ($request->expectsJson()) {
            return null;
        }

        // Determine the guard from the route or request
        $guard = $this->getGuardFromRoute($request);

        // Redirect based on the guard
        switch ($guard) {
            case 'admin':
                return route('admin.login');
            case 'freelancer':
                return route('freelancer.login'); // Update with freelancer login route
            case 'business_owner':
                return route('business_owner.login'); // Update with business_owner login route
            default:
                return route('login'); // Default login route, if needed
        }    }
}
