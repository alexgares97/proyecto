<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        // Check if the request is a GET request
        if ($request->isMethod('get')) {
            // Render the login form
            return view('user.login');
        }
        
        // The request is a POST request, process the authentication
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return view('user.authenticate', [
                'login' => true,
                'name' => $user->name,
                'email' => $user->email,
            ]);
        } else {
            return view('user.authenticate', [
                'login' => false
            ]);
        }
    }


    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|unique:users,name', // Add unique validation rule for name field
            'password' => 'required',
            'email' => 'required|email|unique:users,email', // Add unique validation rule for email field
        ]);

        $user = User::create([
            'name' => $validatedData['name'], // Corrected key
            'password' => bcrypt($validatedData['password']), // Corrected key
            'email' => $validatedData['email'], // Corrected key
        ]);

        $users = User::all(); // Retrieve all users from the database

        return view('user.store', [
            'users' => $users,
        ]);
    }

}

