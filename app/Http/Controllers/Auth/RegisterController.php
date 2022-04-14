<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    // verify email
    /**
    * Handle account registration request
    *
    * @param RegisterRequest $request
    *
    * @return \Illuminate\Http\Response
    */

    public function register()
    {
        $input = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required','unique:users', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = User::create(array_merge(
            $input, [
                'password' => Hash::make(request('password'))
            ]
    ));

    event(new Registered($user));

    auth()->login($user);

    return redirect('/email/verify')->with('success', "Account successfully registered.");
    }
}
