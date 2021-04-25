<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
class AddFoodController extends Controller
{
    public function index()
    {
        return view('addFood');
    }

    public function createFood(Request $request)
    {
        $newfood = new Food;
        $newfood->Price = $request->price;
        $newfood->Name = $request->name;
        $newfood->Submenu_id = $request->submenu;
        $newfood->Image = $request->image;
        $newfood->weight = $request->weight;


        $newfood->save();
    }

}
