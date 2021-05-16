<?php

namespace App\Http\Controllers;

use App\Models\Submenu;
use Illuminate\Http\Request;

class SubmenuController extends Controller
{
    public function addSubmenuIndex(){
        return view('addSubmenu');
    }

    public function createSubmenu(Request $request){
        $newsubmenu = new Submenu;

        $newsubmenu->submenu_name = $request->name;
        $newsubmenu->menu_id = 100;

        $newsubmenu->save();
        return redirect()->route('table');
    }
}
