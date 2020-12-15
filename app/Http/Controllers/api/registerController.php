<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Str;

class registerController extends Controller
{
    public function register(request $request)
    {
        // return "why you came to this world ";
        $request->validate([
            'password' => 'required',
            'email' => 'required|email',
            'name' => 'required|string'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return $request->all();
    }
}
