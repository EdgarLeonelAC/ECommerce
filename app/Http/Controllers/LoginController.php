<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request) {
        // Validar los datos
        
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;

        // Cifrar contraseña
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('products.index'));
    }

    public function login(Request $request) {
        // Validar los datos

        $credenciales = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credenciales)) {
            $request->session()->regenerate();
            return redirect()->intended(route('products.index'));
        } else {
            return redirect('login');
        }
    }

    public function logout(Request $request) {
        // Cerrar Sesión

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
