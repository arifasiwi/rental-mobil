<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 * @package App\Domain\Entities
 */
class Transactions extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'employees_id', 'cars_id', 'users_id', 'drivers_id', 'destinations', 'date_transactions', 'date_loans', 'date_returns', 'tot_payments', 
    ];

}

