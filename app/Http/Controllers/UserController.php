<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

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