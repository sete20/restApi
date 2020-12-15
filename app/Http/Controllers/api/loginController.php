<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Hash;
use PhpParser\Node\Stmt\If_;
use Str;

class loginController extends Controller
{
    public function login(request $request)
    {

        $user = User::first();
        if (Hash::check($request->password, $user->password) || $user->email == $request->email) {
            $user->api_token = null;
            $user->api_token = Str::random(60);
            $user->save();
            return User::where('email', $request->email)->get();
            // return  User::where('email', $request->email);
            // return "hi you did ";
        }
        return "fuck you dod what are u doing here";
    }
    public function logout(request $request)
    {
        $user = User::first();

        if (Hash::check($request->password, $user->password) || $user->email == $request->email) {
            $user->update([
                'api_token' => null
            ]);
            Auth::logout();
            return "hi you logouted successfully";
        }
        return "re login";
    }
}
