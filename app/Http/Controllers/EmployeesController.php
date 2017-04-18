<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employees\EmployeesCreateRequest;
use App\Http\Requests\Employees\EmployeesEditRequest;
use Illuminate\Http\Request;
use App\Domain\Contracts\EmployeesInterface;

class EmployeesController extends Controller
{

    /**
     * @var EmployeesInterface
     */
    protected $employees;

    /**
     * EmployeesController constructor.
     * @param EmployeesInterface $employees
     */
    public function __construct(EmployeesInterface $employees)
    {
        $this->employees = $employees;
    }

    /**
     * @api {get} api/employeess Request Employees with Paginate
     * @apiName GetEmployeesWithPaginate
     * @apiGroup Employees
     *
     * @apiParam {Number} page Paginate employees lists
     */
    public function index(Request $request)
    {
        return $this->employees->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
    }

    /**
     * @api {get} api/employeess/id Request Get Employees
     * @apiName GetEmployees
     * @apiGroup Employees
     *
     * @apiParam {Number} id id_employees
     * @apiSuccess {Number} id id_employees
     * @apiSuccess {Varchar} name name of employees
     * @apiSuccess {Varchar} address name of address
     * @apiSuccess {Varchar} email email of employees
     * @apiSuccess {Number} phone phone of employees
     */
    public function show($id)
    {
        return $this->employees->findById($id);
    }

    /**
     * @api {post} api/employeess/ Request Post Employees
     * @apiName PostEmployees
     * @apiGroup Employees
     *
     *
     * @apiParam {Varchar} name name of employees
     * @apiParam {Varchar} email email of employees
     * @apiParam {Varchar} address email of address
     * @apiParam {Float} phone phone of employees
     * @apiSuccess {Number} id id of employees
     */
    public function store(EmployeesCreateRequest $request)
    {
        return $this->employees->create($request->all());
    }

    /**
     * @api {put} api/employeess/id Request Update Employees by ID
     * @apiName UpdateEmployeesByID
     * @apiGroup Employees
     *
     *
     * @apiParam {Varchar} name name of employees
     * @apiParam {Varchar} email email of employees
     * @apiParam {Varchar} address address of employees
     * @apiParam {Float} phone phone of employees
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(EmployeesEditRequest $request, $id)
    {
        return $this->employees->update($id, $request->all());
    }

    /**
     * @api {delete} api/employeess/id Request Delete Employees by ID
     * @apiName DeleteEmployeesByID
     * @apiGroup Employees
     *
     * @apiParam {Number} id id of employees
     *
     *
     * @apiError EmployeesNotFound The <code>id</code> of the Employees was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->employees->delete($id);
    }

}