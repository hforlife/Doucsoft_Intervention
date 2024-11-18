<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|string',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/home-admin');
        } elseif (Auth::guard('sup')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/home-admin');
        } elseif (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/home-admin');
        }

        return redirect()->back()->withErrors([
            'login_error' => "Les informations d\'identification ne correspondent pas. Veuillez réessayer.",
        ]);
    }

    //Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login'); // Redirec
    }
}
