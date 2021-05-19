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

Route::get('/menu', [MenuController::class, 'menu'])->name('menu');
Route::get('/food', [FoodController::class, 'foodIndex'])->name('food');
Route::get('/table', function(){ return view('table');})->name('table');
//Route::get('/login', [LoginController::class, 'login']);
//Route::get('/registration', [RegistrationController::class, 'registration']);


//Route::view('/admin','home')->middleware('auth')->name('home');

//Route::get('/',function(){
//    if(Auth::check()){
//        return redirect(route('home'));
//    }
//    return view('login');
//})->name('login');

//Route::post('/',[LoginController::class,'login']);

Route::get('/logout',function(){
    Auth::logout();
    return redirect('/login');
})->name('logout');

//Route::get('/registration',function(){
//    if(Auth::check()){
//        return redirect(route('home'));
//    }
//    return view('registration');
//})->name('registration');

//Route::post('/registration',[RegistrationController::class,'save']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addFood', [App\Http\Controllers\FoodController::class, 'addFoodIndex'])->name('addFood');
Route::post('/addFood', [\App\Http\Controllers\FoodController::class, 'createFood']);

Route::get('/food/{id}/delete',[\App\Http\Controllers\FoodController::class, 'deleteFood'])->name('food-delete');

Route::get('/food/{id}/update',[\App\Http\Controllers\FoodController::class, 'updateFood'])->name('food-update');
Route::post('/food/{id}/update',[\App\Http\Controllers\FoodController::class, 'updateFoodSubmit'])->name('food-update-submit');

Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile-update');

Route::get('/addSubmenu', [App\Http\Controllers\SubmenuController::class, 'addSubmenuIndex'])->name('addSubmenu');
Route::post('/addSubmenu', [\App\Http\Controllers\SubmenuController::class, 'createSubmenu']);

