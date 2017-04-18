<?php

namespace App\Http\Controllers;

use App\Http\Requests\Transactions\TransactionsCreateRequest;
use App\Http\Requests\Transactions\TransactionsEditRequest;
use Illuminate\Http\Request;
use App\Domain\Contracts\TransactionsInterface;

class TransactionsController extends Controller
{

    /**
     * @var TransactionsInterfaceq
     */
    protected $transactions;

    /**
     * TransactionsController constructor.
     * @param TransactionsInterface $transactions
     */
    public function __construct(TransactionsInterface $transactions)
    {
        $this->transactions = $transactions;
    }

    /**
     * @api {get} api/transactionss Request Transactions with Paginate
     * @apiName GetTransactionsWithPaginate
     * @apiGroup Transactions
     *
     * @apiParam {Number} page Paginate transactions lists
     */
    public function index(Request $request)
    {
        return $this->transactions->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
    }

    /**
     * @api {get} api/transactionss/id Request Get Transactions
     * @apiName GetTransactions
     * @apiGroup Transactions
     *
     * @apiParam {Number} id id_transactions
     * @apiSuccess {Number} id id_transactions
     * @apiSuccess {Varchar} name name of transactions
     * @apiSuccess {Varchar} address name of address
     * @apiSuccess {Varchar} email email of transactions
     * @apiSuccess {Number} phone phone of transactions
     */
    public function show($id)
    {
        return $this->transactions->findById($id);
    }

    /**
     * @api {post} api/transactionss/ Request Post Transactions
     * @apiName PostTransactions
     * @apiGroup Transactions
     *
     *
     * @apiParam {Varchar} name name of transactions
     * @apiParam {Varchar} email email of transactions
     * @apiParam {Varchar} address email of address
     * @apiParam {Float} phone phone of transactions
     * @apiSuccess {Number} id id of transactions
     */
    public function store(TransactionsCreateRequest $request)
    {
        return $this->transactions->create($request->all());
    }

    /**
     * @api {put} api/transactionss/id Request Update Transactions by ID
     * @apiName UpdateTransactionsByID
     * @apiGroup Transactions
     *
     *
     * @apiParam {Varchar} name name of transactions
     * @apiParam {Varchar} email email of transactions
     * @apiParam {Varchar} address address of transactions
     * @apiParam {Float} phone phone of transactions
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(TransactionsEditRequest $request, $id)
    {
        return $this->transactions->update($id, $request->all());
    }

    /**
     * @api {delete} api/transactionss/id Request Delete Transactions by ID
     * @apiName DeleteTransactionsByID
     * @apiGroup Transactions
     *
     * @apiParam {Number} id id of transactions
     *
     *
     * @apiError TransactionsNotFound The <code>id</code> of the Transactions was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->transactions->delete($id);
    }

}