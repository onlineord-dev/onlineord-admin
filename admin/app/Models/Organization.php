<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    protected $table = 'organization';
    protected $fillable = [
        'Name',
        'Address',
        'email',
        'password',
        'Phone_number'
    ];
    public $timestamps = false;
}
