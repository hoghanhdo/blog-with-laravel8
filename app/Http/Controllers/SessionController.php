<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('session.create');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => 'Your credentials cannot be verified'
            ]);
        }
        session()->regenerate(); // avoid session fixation
        return redirect('/')->with('success', 'Welcome Back!');

        // return back() // Similar way of throwing ValidationException
        //     ->withInput()
        //     ->withErrors([
        //     'email' => 'Your credentials cannot be verified'
        // ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
