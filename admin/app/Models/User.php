<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'organization';
    protected $fillable = [
        'Name',
        'Address',
        'Email',
        'Passwords',
        'Phone_number'
    ];
    public $timestamps = false;
    /**
     * @var mixed
     */
}
