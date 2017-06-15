<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Drivers;
use App\Domain\Contracts\DriversInterface;
use App\Domain\Contracts\Crudable;


/**
 * Class DriversRepository
 * @package App\Domain\Repositories
 */
class DriversRepository extends AbstractRepository implements DriversInterface, Crudable
{

    /**
     * @var Drivers
     */
    protected $model;

    /**
     * DriversRepository constructor.
     * @param Drivers $drivers
     */
    public function __construct(Drivers $drivers)
    {
        $this->model = $drivers;
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
                    ->orWhere('name', 'like', '%' . $search . '%')
                    ->orWhere('address', 'like', '%' . $search . '%');
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
            'name'    => e($data['name']),
            'gender'   => e($data['gender']),
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
            'gender'   => e($data['gender']),
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