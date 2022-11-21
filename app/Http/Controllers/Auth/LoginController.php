<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function handle()
    {
        $login = auth()->attempt([
            'email' => request('email'),
            'password' => request('password')
        ], request()->has('remember'));

        if ($login) {
            return redirect()->to(RouteServiceProvider::HOME);
        }

        return back()->withErrors([
            'password' => 'The provided credentials do not match our records.',
        ]);
    }
}
