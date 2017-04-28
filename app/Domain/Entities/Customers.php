<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cars
 * @package App\Domain\Entities
 */
class Customers extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
         'name','address','phone','ktp','users_id',
    ];

}
