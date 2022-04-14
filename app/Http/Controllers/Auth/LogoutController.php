<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function handle(Request $request)
    {
        Auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('admin');
    }
}
