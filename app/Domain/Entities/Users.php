<?php

namespace App\Domain\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password','address','phone','ktp','level',
    ];
protected $table ='users';
    protected $hidden = [
        'password',
    ];
}
