<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;





class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function handle()
    {
        $input = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required','unique:users', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create(array_merge(
            $input,
            [
                'password' => Hash::make(request('password'))
            ]));

        Auth::login($user);
        return redirect()->to(RouteServiceProvider::HOME);
    }
}
