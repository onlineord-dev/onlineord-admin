<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function login(Request $request) {
        if(Auth::check()){
            return redirect()->intended(route('home'));
        }
        $formFields = $request->only(['email','password']);
        if(Auth::attempt($formFields)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->withErrors([
            'email' => 'Не вдалось авторизуватись'
        ]);
    }
}
