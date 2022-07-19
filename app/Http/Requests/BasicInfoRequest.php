<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BasicInfoRequest extends FormRequest
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
            'user_id'       =>'nullable|exists:users,id',
            'full_name'     =>'required|string',
            'father_name'   =>'required|string',
            'mother_name'   =>'required|string',
            'birth_date'    =>'required|string',
            'gender'        =>'required',
            'height'        =>'required',
            'religion'      =>'required',
            'marital_status'=>'required',
            'nid'           =>'required|string',
            'mobile'        =>'required|string',
            'email'         =>'required|string',
            'quota_id'      =>'nullable'
        ];
    }
}
