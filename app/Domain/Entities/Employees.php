<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 * @package App\Domain\Entities
 */
class Employees extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'gender', 'ktp', 'phone',
    ];

}

