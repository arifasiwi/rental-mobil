<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Domain\Repositories\UsersRepository;
=======
>>>>>>> 38324a132ef4b8788d2f6142d50b85349c8253da
use App\Http\Requests\Users\UsersCreateRequest;
use App\Http\Requests\Users\UsersEditRequest;
use Illuminate\Http\Request;
use App\Domain\Contracts\UsersInterface;

class UsersController extends Controller
{

    /**
     * @var UsersInterface
     */
    protected $users;

    /**
     * UserssController constructor.
     * @param UsersInterface $userss
     */
<<<<<<< HEAD
    public function __construct(UsersRepository $users)
=======
    public function __construct(UsersInterface $users)
>>>>>>> 38324a132ef4b8788d2f6142d50b85349c8253da
    {
        $this->users = $users;
    }

    /**
     * @api {get} api/usersss Request Userss with Paginate
     * @apiName GetUserssWithPaginate
     * @apiGroup Userss
     *
     * @apiParam {Number} page Paginate userss lists
     */
    public function index(Request $request)
    {
        return $this->users->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
    }

    /**
     * @api {get} api/users/id Request Get Userss
     * @apiName GetUsers
     * @apiGroup Users
     *
     * @apiParam {Number} id id_userss
     * @apiSuccess {Number} id id_userss
     * @apiSuccess {Varchar} name name of userss
     * @apiSuccess {Varchar} address name of address
     * @apiSuccess {Varchar} email email of userss
     * @apiSuccess {Number} phone phone of userss
     */
    public function show($id)
    {
        return $this->users->findById($id);
    }

    /**
     * @api {post} api/usersss/ Request Post Userss
     * @apiName PostUserss
     * @apiGroup Userss
     *
     *
     * @apiParam {Varchar} name name of userss
     * @apiParam {Varchar} email email of userss
     * @apiParam {Varchar} address email of address
     * @apiParam {Float} phone phone of userss
     * @apiSuccess {Number} id id of userss
     */
    public function store(Request $request)
    {
        return $this->users->create($request->all());
    }

    /**
     * @api {put} api/usersss/id Request Update Userss by ID
     * @apiName UpdateUserssByID
     * @apiGroup Userss
     *
     *
     * @apiParam {Varchar} name name of userss
     * @apiParam {Varchar} email email of userss
     * @apiParam {Varchar} address address of userss
     * @apiParam {Float} phone phone of userss
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(UsersCreateRequest $request, $id)
    {
        return $this->users->update($id, $request->all());
    }

    /**
     * @api {delete} api/usersss/id Request Delete Userss by ID
     * @apiName DeleteUserssByID
     * @apiGroup Userss
     *
     * @apiParam {Number} id id of userss
     *
     *
     * @apiError UserssNotFound The <code>id</code> of the Userss was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->users->delete($id);
    }
<<<<<<< HEAD
    public function getSession()
    {
        if (session('email') == null) {
            return response()->json(
                [
                    'success' => false,
                    'result' => 'redirect'
                ], 401
            );
        }
     
                return response()->json([
                    'success' => true,
                    'result' => [
                        'name' => session('name'),
                        'user_id' => session('user_id'),
                        'email' => session('email'),
                        'level' => session('level'),
     
                    ]]);
            }
    
=======
>>>>>>> 38324a132ef4b8788d2f6142d50b85349c8253da

}