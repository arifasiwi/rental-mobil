<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Transactions;
use App\Domain\Contracts\TransactionsInterface;
use App\Domain\Contracts\Crudable;


/**
 * Class TransactionsRepository
 * @package App\Domain\Repositories
 */
class TransactionsRepository extends AbstractRepository implements TransactionsInterface, Crudable
{

    /**
     * @var Transactions
     */
    protected $model;

    /**
     * TransactionsRepository constructor.
     * @param Transactions $transactions
     */
    public function __construct(Transactions $transactions)
    {
        $this->model = $transactions;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * @param int $limit
     * @param int $page
     * @param array $column
     * @param string $field
     * @param string $search
     * @return \Illuminate\Pagination\Paginator
     */
    public function paginate($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
        // query to aql
        $akun = $this->model
       ->where(function ($query) use ($search) {
                $query->where('customers_id', 'like', '%' . $search . '%')
                    ->orWhere('users_id', 'like', '%' . $search . '%')
                    ->orWhere('date_loans', 'like', '%' . $search . '%');
            })
            ->paginate($limit)
            ->toArray();
            return $akun;

    }

    /**
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(array $data)
    {
        // execute sql insert
        return parent::create([
            'employees_id'    => e($data['employees_id']),
            'users_id'   => e($data['users_id']),
            'cars_id' => e($data['cars_id']),
            'drivers_id'   => e($data['drivers_id']),
            'destinations'   => e($data['destinations']),
            'date_transactions'   => e($data['date_transactions']),
            'date_loans' => e($data['date_loans']),
            'date_returns' => e($data['date_returns']),
            'tot_payments' => e($data['tot_payments'])
        ]);

    }

    /**
     * @param $id
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function update($id, array $data)
    {
        return parent::update($id, [
            'employees_id'    => e($data['employees_id']),
            'users_id'   => e($data['users_id']),
            'cars_id' => e($data['cars_id']),
            'drivers_id'   => e($data['drivers_id']),
            'destinations'   => e($data['destinations']),
            'date_transactions'   => e($data['date_transactions']),
            'date_loans' => e($data['date_loans']),
            'date_returns' => e($data['date_returns']),
            'tot_payments' => e($data['tot_payments'])
        ]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function delete($id)
    {
        return parent::delete($id);
    }


    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function findById($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

}