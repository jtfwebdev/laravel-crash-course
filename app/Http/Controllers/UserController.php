<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function loginPage()
    {
        return view('Login');
    }

    public function registerPage()
    {
        return view('Register');
    }

    public function registerUser(Request $request)
    {
        $register_credentials = $request->validate([
            'name' => ['required', 'min:2', 'max:30'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:12', 'confirmed'],
        ]);

        User::create($register_credentials);
        
    }

    public function loginUser()
    {

    }
}