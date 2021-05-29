<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    use HasFactory;
    protected $table = 'sub_menu';
    protected $fillable = [
        'submenu_name',
        'menu_id'
    ];
    public $timestamps = false;
}
