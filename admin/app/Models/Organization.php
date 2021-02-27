<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Organization extends Authenticatable
{
    use HasFactory;
    protected $table = 'organization';

    /*
    public function create(Request $request){
        $organization = new Organization;
        $organization->Name = $request->name;
        $organization->Address = $request->address;
        $organization->Email = $request->email;
        $organization->Passwords = $request->password;
        $organization->Phone_number = $request->phone;
        $organization->save();
    }
    */

    protected $fillable = [
        'Name',
        'Address',
        'Email',
        'Passwords',
        'Phone_number'
    ];

}
