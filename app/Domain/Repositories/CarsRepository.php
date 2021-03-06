<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Cars;
use App\Domain\Contracts\CarsInterface;
use App\Domain\Contracts\Crudable;


/**
 * Class CarsRepository
 * @package App\Domain\Repositories
 */
class CarsRepository extends AbstractRepository implements CarsInterface, Crudable
{

    /**
     * @var Cars
     */
    protected $model;

    /**
     * CarsRepository constructor.
     * @param Cars $cars
     */
    public function __construct(Cars $cars)
    {
        $this->model = $cars;
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
                $query->where('type', 'like', '%' . $search . '%')
                    ->orWhere('merk', 'like', '%' . $search . '%')
                    ->orWhere('color', 'like', '%' . $search . '%');
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
            'no_plat'    => e($data['no_plat']),
            'type'   => e($data['type']),
            'merk' => e($data['merk']),
            'color'   => e($data['color']),
            'foto'   => e($data['foto'])
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
            'no_plat'    => e($data['no_plat']),
            'type'   => e($data['type']),
            'merk' => e($data['merk']),
            'foto'   => e($data['foto']),
            'color'   => e($data['color'])
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
    public function getList()
    {
        // Query ke sql.
        $akun = $this->model->get()->toArray();
        // Jika data null.
        if (null == $akun) {
            // Set header respon tidak ditemukan.
            return $this->errorNotFound('Data belum tersedia');
        }
        return $akun;
    }

}