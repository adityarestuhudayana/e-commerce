<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function register()
    {
        return view('login.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:4|max:10',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        User::create($validatedData);

        return redirect('/login')->with('regisSuccess', 'Registrasi akun berhasil');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('products');
        }

        return back()->with('loginFailed', 'Email atau password mungkin salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function profile()
    {
        return view('profile.index', [
            'products' => Product::latest()->get()
        ]);
    }
}
