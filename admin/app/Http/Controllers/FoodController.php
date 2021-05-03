<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    public function foodIndex() {
        return view('food');
    }

    public function addFoodIndex()
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
        return redirect()->route('food');
    }

    public function deleteFood($id){
        $foodToDelete = DB::table('food')->where('ID', $id)->delete();
        return redirect()->route('food');
    }

}
