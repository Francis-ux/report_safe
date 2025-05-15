<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('auth.login', ['title' => 'Login Account']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        try {
            $remember = $request->remember;

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials, $remember)) {
                return redirect()->intended(route('admin.dashboard'));
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/login');
    }
}
