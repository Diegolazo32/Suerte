<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json(['message' => 'Login successful'], 200);
        }
        else {
            return response()->json(['message' => 'Credentials'], 401);
        }

        return response()->json(['message' => 'Login failed'], 401);

    }

    public function logOut()
    {
        Auth::logout();
        return redirect('/');
    }
}
