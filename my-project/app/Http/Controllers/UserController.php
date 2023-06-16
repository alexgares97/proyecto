<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $userName = $request->input('UserName');
        $password = $request->input('Password');
        $email = $request->input('Email');

        // Validate the fields and perform any other necessary logic

        $user = new User();
        $user->name = $userName;
        $user->password = $password;
        $user->email = $email;
        $user->save();

        return view('user.register-success');
    }
}
