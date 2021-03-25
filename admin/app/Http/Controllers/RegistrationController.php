<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Organization;
use Illuminate\Support\Facades\Auth;


class RegistrationController extends Controller
{
    public function registration() {
        return view('registration');
    }
    public function save(Request $request){
        $validateFields = $request->validate([
            'name' => 'required',
            'address'=> 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required'
        ]);

        $organization = Organization::create($validateFields);

        if($organization){
            Auth::login($organization);
            return redirect(route('organization.home'));
        }

        return redirect(route('organization.login'))->withErrors([
            'formError' => "Произошла ошибка при создании пользователя"
        ]);
        //Organization.store($request);

    }
}
