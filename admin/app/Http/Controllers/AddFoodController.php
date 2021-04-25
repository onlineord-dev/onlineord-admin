<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddFoodController extends Controller
{
    public function index()
    {
        return view('addFood');
    }

}
