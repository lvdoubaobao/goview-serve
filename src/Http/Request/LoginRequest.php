<?php

namespace Xczn\GoViewServe\Http\Request;

use App\Exceptions\ApiException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password'=>'required',
            'username'=>'required'
        ];
    }
    public function messages()
    {
        return [
          'username.required'=>'请输入账号',
          'password.required'=>'请输入密码'
        ];
    }
}
