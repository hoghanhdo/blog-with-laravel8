<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
            'user_name'  => 'required|max:255|min:3',
            'password'  => 'required|max:255|min:8',
            'email'     => 'required|email|max:255'
        ]);
        User::create($attr);

        return redirect('/');
    }
}