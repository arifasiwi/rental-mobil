<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cars
 * @package App\Domain\Entities
 */
class Cars extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'no_plat', 'type', 'merk', 'color', 'foto',
    ];

}
