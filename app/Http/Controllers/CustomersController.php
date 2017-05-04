<?php

namespace App\Http\Controllers;

use App\Http\Requests\Customers\CustomersCreateRequest;
use App\Http\Requests\Customers\CustomersEditRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\CustomersRepository;

class CustomersController extends Controller
{

    /**
     * @var CustomersInterface
     */
    protected $customers;

    /**
     * CustomersController constructor.
     * @param CustomersInterface $customers
     */
    public function __construct(CustomersRepository $customers)
    {
        $this->customers = $customers;
    }

    /**
     * @api {get} api/customerss Request Customers with Paginate
     * @apiName GetCustomersWithPaginate
     * @apiGroup Customers
     *
     * @apiParam {Number} page Paginate customers lists
     */
    public function index(Request $request)
    {
        return $this->customers->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('term'));
    }

    /**
     * @api {get} api/customerss/id Request Get Customers
     * @apiName GetCustomers
     * @apiGroup Customers
     *
     * @apiParam {Number} id id_customers
     * @apiSuccess {Number} id id_customers
     * @apiSuccess {Varchar} name name of customers
     * @apiSuccess {Varchar} address name of address
     * @apiSuccess {Varchar} email email of customers
     * @apiSuccess {Number} phone phone of customers
     */
    public function show($id)
    {
        return $this->customers->findById($id);
    }

    /**
     * @api {post} api/customerss/ Request Post Customers
     * @apiName PostCustomers
     * @apiGroup Customers
     *
     *
     * @apiParam {Varchar} name name of customers
     * @apiParam {Varchar} email email of customers
     * @apiParam {Varchar} address email of address
     * @apiParam {Float} phone phone of customers
     * @apiSuccess {Number} id id of customers
     */
    public function store(CustomersCreateRequest $request)
    {
        return $this->customers->create($request->all());
    }

    /**
     * @api {put} api/customerss/id Request Update Customers by ID
     * @apiName UpdateCustomersByID
     * @apiGroup Customers
     *
     *
     * @apiParam {Varchar} name name of customers
     * @apiParam {Varchar} email email of customers
     * @apiParam {Varchar} address address of customers
     * @apiParam {Float} phone phone of customers
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(CustomersCreateRequest $request, $id)
    {
        return $this->customers->update($id, $request->all());
    }

    /**
     * @api {delete} api/customerss/id Request Delete Customers by ID
     * @apiName DeleteCustomersByID
     * @apiGroup Customers
     *
     * @apiParam {Number} id id of customers
     *
     *
     * @apiError CustomersNotFound The <code>id</code> of the Customers was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->customers->delete($id);
    }

}