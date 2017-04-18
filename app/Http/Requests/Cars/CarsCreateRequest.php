<?php

namespace App\Http\Requests\Cars;

use App\Http\Requests\Request;

/**
 * Class UserCreateRequest
 *
 * @package App\Http\Requests\User
 */
class CarsCreateRequest extends Request
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
        'no_plat'    => 'No_plat',
        'type'   => 'Type',
        'merk' => 'Merk',
        'color'    => 'Color'
    
    ];
 
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'no_plat'    => 'required|max:225',
            'type'   => 'required|max:225',
            'merk' => 'required|max:60',
            'color'    => 'required|max:225'
        
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
