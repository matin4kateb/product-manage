<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
// use App\Models\Seller;
use App\Models\User;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        // Authorization is done in the RegisterRequest

        // Insert data
        User::create([
            ...$request->validated(),
            'password' => bcrypt($request->validated('password'))    // Hash user's password
        ]);

        return redirect()->route('login');  // Now login (redirect user to login page after registration)
    }
}
