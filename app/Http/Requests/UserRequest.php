<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $image = $this->avatar;
        if(empty($image))
            return true;
        else
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'nama' => 'required',
        'email' => 'email',
        'password' => 'password',
        'avatar' => 'mimes:jpeg,bmp,png'
            
        ];
    }
}
