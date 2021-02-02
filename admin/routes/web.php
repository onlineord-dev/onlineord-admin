<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class, 'home']);
Route::get('/admin', [HomeController::class, 'home']);
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/menu', [MenuController::class, 'menu']);
Route::get('/food', [FoodController::class, 'food']);
Route::get('/login', [LoginController::class, 'login']);
