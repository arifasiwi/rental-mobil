<?php

namespace App\Http\Controllers;

use App\Http\Requests\Drivers\DriversCreateRequest;
use App\Http\Requests\Drivers\DriversEditRequest;
use Illuminate\Http\Request;
use App\Domain\Contracts\DriversInterface;

class DriversController extends Controller
{

    /**
     * @var DriversInterface
     */
    protected $drivers;

    /**
     * DriversController constructor.
     * @param DriversInterface $drivers
     */
    public function __construct(DriversInterface $drivers)
    {
        $this->drivers = $drivers;
    }

    /**
     * @api {get} api/driverss Request Drivers with Paginate
     * @apiName GetDriversWithPaginate
     * @apiGroup Drivers
     *
     * @apiParam {Number} page Paginate drivers lists
     */
    public function index(Request $request)
    {
        return $this->drivers->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
    }

    /**
     * @api {get} api/driverss/id Request Get Drivers
     * @apiName GetDrivers
     * @apiGroup Drivers
     *
     * @apiParam {Number} id id_drivers
     * @apiSuccess {Number} id id_drivers
     * @apiSuccess {Varchar} name name of drivers
     * @apiSuccess {Varchar} address name of address
     * @apiSuccess {Varchar} email email of drivers
     * @apiSuccess {Number} phone phone of drivers
     */
    public function show($id)
    {
        return $this->drivers->findById($id);
    }

    /**
     * @api {post} api/driverss/ Request Post Drivers
     * @apiName PostDrivers
     * @apiGroup Drivers
     *
     *
     * @apiParam {Varchar} name name of drivers
     * @apiParam {Varchar} email email of drivers
     * @apiParam {Varchar} address email of address
     * @apiParam {Float} phone phone of drivers
     * @apiSuccess {Number} id id of drivers
     */
    public function store(DriversCreateRequest $request)
    {
        return $this->drivers->create($request->all());
    }

    /**
     * @api {put} api/driverss/id Request Update Drivers by ID
     * @apiName UpdateDriversByID
     * @apiGroup Drivers
     *
     *
     * @apiParam {Varchar} name name of drivers
     * @apiParam {Varchar} email email of drivers
     * @apiParam {Varchar} address address of drivers
     * @apiParam {Float} phone phone of drivers
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(DriversEditRequest $request, $id)
    {
        return $this->drivers->update($id, $request->all());
    }

    /**
     * @api {delete} api/driverss/id Request Delete Drivers by ID
     * @apiName DeleteDriversByID
     * @apiGroup Drivers
     *
     * @apiParam {Number} id id of drivers
     *
     *
     * @apiError DriversNotFound The <code>id</code> of the Drivers was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->drivers->delete($id);
    }

}