<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function logar(Request $request)
    {
        $credenciais = $request->only('email', 'password');

        if (Auth::attempt($credenciais, $request->filled('remember'))) {
            return redirect()->route('home');
        }

        return back()->withErrors(['email' => 'Email ou senha inválidos']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
