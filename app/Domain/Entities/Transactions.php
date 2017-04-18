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

    protected $with = ['users', 'employees', 'cars', 'drivers'];

    public function users()
    {
        return $this->belongsTo('App\Domain\Entities\Users', 'users_id');
    }

    public function employees()
    {
        return $this->belongsTo('App\Domain\Entities\Employees', 'employees_id');
    }

    public function cars()
    {
        return $this->belongsTo('App\Domain\Entities\Cars', 'cars_id');
    }

    public function drivers()
    {
        return $this->belongsTo('App\Domain\Entities\Drivers', 'drivers_id');
    }

}

