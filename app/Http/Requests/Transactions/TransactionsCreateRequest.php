<?php

namespace App\Http\Requests\Transactions;

use App\Http\Requests\Request;

/**
 * Class UserCreateRequest
 *
 * @package App\Http\Requests\User
 */
class TransactionsCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Declaration an attributes
     *
     * @var array
     */
    protected $attrs = [
        'customers_id'    => 'customers_id',
        'cars_id'   => 'cars_id',
        'users_id' => 'users_id',
        'drivers_id'    => 'drivers_id',
        'destinations'   => 'destinations',
        'date_transactions' => 'date_transactions',
        'date_loans'   => 'date_loans',
        'date_returns'    => 'date_returns',
        'tot_payments'   => 'tot_payments'
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customers_id'    => 'required|max:225',
            'cars_id'   => 'required|max:225',
            'users_id' => 'required|max:60',
            'drivers_id'    => 'required|max:225',
            'destinations'   => 'required|max:225',
            'date_transactions' => 'required|max:60',
            'date_loans'   => 'required|max:30',
            'date_returns'    => 'required|max:225',
            'tot_payments'   => 'required|max:225'
        ];
    }

    /**
     * @param $validator
     *
     * @return mixed
     */
    public function validator($validator)
    {
        return $validator->make($this->all(), $this->container->call([$this, 'rules']), $this->messages(), $this->attrs);
    }

}
