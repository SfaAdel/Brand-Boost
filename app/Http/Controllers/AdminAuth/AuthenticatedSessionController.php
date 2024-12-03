<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('admin.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Authenticate with "remember me" option
        $remember = $request->filled('remember');
        $credentials = $request->only('email', 'password');
    
        if (Auth::guard('admin')->attempt($credentials, $remember)) {
            $request->session()->regenerate();
    
            return redirect()->intended(route('admin.index'));
        }
    
        // If authentication fails
        return back()->withErrors([
            'email' => __('auth.failed'),
        ]);
    }
    
    
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();
    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect(route('admin.login'));
    }
    
}
