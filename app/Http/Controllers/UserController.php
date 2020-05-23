<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        echo 'index';
    }

    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
