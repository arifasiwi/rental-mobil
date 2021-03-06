<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Customers;
use App\Domain\Contracts\CustomersInterface;
use App\Domain\Contracts\Crudable;


/**
 * Class CustomersRepository
 * @package App\Domain\Repositories
 */
class CustomersRepository extends AbstractRepository implements CustomersInterface, Crudable
{

    /**
     * @var Customers
     */
    protected $model;

    /**
     * CustomersRepository constructor.
     * @param Customers $customers
     */
    public function __construct(Customers $customers)
    {
        $this->model = $customers;
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
                $query->where('ktp', 'like', '%' . $search . '%')
                    ->orWhere('name', 'like', '%' . $search . '%');
            })
            ->paginate($limit)
            ->toArray();
            return $akun;

    }
    public function jumlahcustomers()
    {
        // query to aql
        $akun = $this->model
            ->count();

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
            'name'    => e($data['name']),
            'users_id'   => e($data['users_id']),
            'ktp' => e($data['ktp']),
            'address'   => e($data['address']),
            'phone'   => e($data['phone'])
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
            'name'    => e($data['name']),
            'users_id'   => e($data['users_id']),
            'ktp' => e($data['ktp']),
            'address'   => e($data['address']),
            'phone'   => e($data['phone'])
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