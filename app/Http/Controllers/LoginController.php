<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); 
    }

    public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

      
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // La autenticación fue exitosa
            return redirect()->intended('/dashboard'); // Ajusta la ruta según tus necesidades
        }

      
        return back()->withErrors(['email' => 'Credenciales incorrectas'])->withInput($request->only('email'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
