<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'food';
    protected $fillable = [
        'Price',
        'Name',
        'Submenu_id',
        'Image',
        'weight'
    ];
    public $timestamps = false;
}
