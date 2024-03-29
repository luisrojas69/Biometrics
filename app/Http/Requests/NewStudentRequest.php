<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewStudentRequest extends Request
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
            'name' => 'required|string|max:20',
            'rollno' => 'required|alpha_num|size:8',
            'key' => 'required|max:10'
        ];
    }
}
