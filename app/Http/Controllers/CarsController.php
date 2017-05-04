<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cars\CarsCreateRequest;
use App\Http\Requests\Cars\CarsEditRequest;
use Illuminate\Http\Request;
use App\Domain\Contracts\CarsInterface;

class CarsController extends Controller
{

    /**
     * @var CarsInterface
     */
    protected $cars;

    /**
     * CarsController constructor.
     * @param CarsInterface $cars
     */
    public function __construct(CarsInterface $cars)
    {
        $this->cars = $cars;
    }

    /**
     * @api {get} api/carss Request Cars with Paginate
     * @apiName GetCarsWithPaginate
     * @apiGroup Cars
     *
     * @apiParam {Number} page Paginate cars lists
     */
    public function index(Request $request)
    {
        return $this->cars->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('term'));
    }

    /**
     * @api {get} api/carss/id Request Get Cars
     * @apiName GetCars
     * @apiGroup Cars
     *
     * @apiParam {Number} id id_cars
     * @apiSuccess {Number} id id_cars
     * @apiSuccess {Varchar} name name of cars
     * @apiSuccess {Varchar} address name of address
     * @apiSuccess {Varchar} email email of cars
     * @apiSuccess {Number} phone phone of cars
     */
    public function show($id)
    {
        return $this->cars->findById($id);
    }

    /**
     * @api {post} api/carss/ Request Post Cars
     * @apiName PostCars
     * @apiGroup Cars
     *
     *
     * @apiParam {Varchar} name name of cars
     * @apiParam {Varchar} email email of cars
     * @apiParam {Varchar} address email of address
     * @apiParam {Float} phone phone of cars
     * @apiSuccess {Number} id id of cars
     */
    public function store(CarsCreateRequest $request)
    {
        return $this->cars->create($request->all());
    }

    /**
     * @api {put} api/carss/id Request Update Cars by ID
     * @apiName UpdateCarsByID
     * @apiGroup Cars
     *
     *
     * @apiParam {Varchar} name name of cars
     * @apiParam {Varchar} email email of cars
     * @apiParam {Varchar} address address of cars
     * @apiParam {Float} phone phone of cars
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(CarsCreateRequest $request, $id)
    {
        return $this->cars->update($id, $request->all());
    }

    /**
     * @api {delete} api/carss/id Request Delete Cars by ID
     * @apiName DeleteCarsByID
     * @apiGroup Cars
     *
     * @apiParam {Number} id id of cars
     *
     *
     * @apiError CarsNotFound The <code>id</code> of the Cars was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->cars->delete($id);
    }

}