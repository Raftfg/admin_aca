<?php

namespace App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Rules\Password;

class ConfirmablePasswordController extends Controller
{
    //

    // public function show()
    // {
    //     return view('auth.password-confirm');
    // }

    // public function confirm(Request $request)
    // {
    //     $request->validate([
    //         'password' => ['required', new Password],
    //     ]);

    //     if (Auth::guard('web')->validate([
    //         'email' => Auth::user()->email,
    //         'password' => $request->password,
    //     ])) {
    //         $request->session()->put('auth.password_confirmed_at', time());
    //         return redirect()->intended(config('fortify.home'));
    //     }

    //     return redirect()->back()->withErrors([
    //         'password' => __('The provided password does not match your current password.'),
    //     ]);
    // }
}
