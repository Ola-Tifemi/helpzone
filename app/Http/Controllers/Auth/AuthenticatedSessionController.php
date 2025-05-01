<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
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
        return view('helpzone.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {

            $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            $user = User::where('email', $request->email)->first();

            if ($user && $user->status === 'blocked') {
                return back()->withErrors([
                    'email' => 'Your account has been blocked. Please contact support.',
                ]);
            }

            if (! Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
                return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ]);
            }
            if (Auth::check() && Auth::user()->status === 'blocked') {
                Auth::logout();
                return redirect()->route('login')->withErrors(['email' => 'Your account has been blocked.']);
            }
            

            $request->session()->regenerate();

            // 🔥 Role-based redirection
            if (Auth::user()->role === 'admin') {
                return redirect('/admin-dashboard');
            } else {
                return redirect('/dashboard');
            }
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
