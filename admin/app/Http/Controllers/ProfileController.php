<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        $organizationToUpdate = DB::table('organization')->where('ID', 439)->update([
            'Name' => $request->orgName,
            'Address' => $request->orgAddress,
            'email' => $request->orgemail,
            'Phone_number' => $request->orgPhone_number
        ]);
        return redirect()->route('profile');
    }
}
