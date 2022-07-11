<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        $attr = $request->validate([
            'name'      => 'required|max:255',
            'user_name'  => 'required|max:255|min:3|unique:users,user_name',
            'password'  => 'required|max:255|min:8|unique:users,email',
            'email'     => 'required|email|max:255'
        ]);
        $user = User::create($attr);

        auth()->login($user);

        return redirect('/')
            ->with('success', 'Your account has been successfully created.');
    }
}
