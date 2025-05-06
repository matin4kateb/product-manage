<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        // Validation is done in the LoginRequest class

        if ( Auth::attempt($request->validated()) )
        {
            session()->regenerate();
            return redirect()->route('index');
        } else {    // If login fails
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.'
            ])->onlyInput('email');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
