<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login () {
        return view('auth.login');
    }

    public function logout() {
        Auth::logout();
        return to_route('auth.login');
    }

    public function doLogin(LoginRequest $request) {

        $credentials = $request->validated();

           if(Auth::attempt($credentials)) {
           $request->session()->regenerate();

           return redirect()->intended(route('home.index'));

        }

        return to_route('auth.login')->withErrors([
            'email' => "L'email et le mot de passe ne concorde pas. Veuillez réessayer"
        ])->onlyInput('email');
    }



}
