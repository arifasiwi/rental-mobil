<?php

namespace App\Http\Requests\Users;

use App\Http\Requests\Request;

/**
 * Class UserCreateRequest
 *
 * @package App\Http\Requests\User
 */
class UsersCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Declaration an attributes
     *
     * @var array
     */
    protected $attrs = [
        'name'    => 'name',
        'ktp'   => 'ktp',
        'phone' => 'phone',
        'level'    => 'level',
        'email'   => 'Email',
        'address' => 'Address',
        'password'   => 'password'
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'    => 'required|max:225',
            'ktp'   => 'required|max:225',
            'phone' => 'required|max:60',
            'level'    => 'required|max:225',
            'email'   => 'required|email|unique:contacts,email|max:225',
            'address' => 'required|max:60',
            'password'   => 'required|max:225'
        ];
    }

    /**
     * @param $validator
     *
     * @return mixed
     */
    public function validator($validator)
    {
        return $validator->make($this->all(), $this->container->call([$this, 'rules']), $this->messages(), $this->attrs);
    }

}
