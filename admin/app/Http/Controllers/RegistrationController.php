<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function save(Request $request){
        //if(Auth::check()){
        //    return redirect(route('home'));
        //}
        //$validateFields = $request->validate([
        //    'name' => 'required',
        //    'address' => 'required',
        //    'email' => 'required|email',
        //    'password' => 'required',
        //    'phone_number' => 'required'
        //]);

        $newuser = new User;
        $newuser->Name = $request['name'];
        $newuser->Address = $request['address'];
        $newuser->Email = $request['email'];
        $newuser->Passwords = $request['password'];
        $newuser->Phone_number = $request['phone_number'];
        $newuser->save();

        //if($user){
        //    Auth::login($user);
        //    return redirect(route('home'));
        //}
        //return redirect(route('registration'))->withErrors([
        //    'formError' => 'Виникла помилка під час зберігання користувача'
        //]);
    }
}
