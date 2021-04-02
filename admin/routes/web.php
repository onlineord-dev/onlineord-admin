<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;

//Route::get('/', [LoginController::class, 'login']);
//Route::get('/admin', [HomeController::class, 'home']);
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/menu', [MenuController::class, 'menu']);
Route::get('/food', [FoodController::class, 'food']);
//Route::get('/login', [LoginController::class, 'login']);
Route::get('/registration', [RegistrationController::class, 'registration']);


Route::view('/admin','home')->middleware('auth')->name('home');

Route::get('/',function(){
    if(Auth::check()){
        return redirect(route('home'));
    }
    return view('login');
})->name('login');

Route::post('/',[LoginController::class,'login']);

Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/registration',function(){
    if(Auth::check()){
        return redirect(route('home'));
    }
    return view('registration');
})->name('registration');

Route::post('/registration',[RegistrationController::class,'save']);
