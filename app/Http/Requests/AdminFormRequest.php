<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminFormRequest extends Request
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
        if(request()->has('existing'))
        {
            return [
                'course' => 'required',
                'Book' => ['mimes:pdf'],
                //'Slide' => ['mimes:pdf'],
                'Pasco' => ['mimes:pdf'],
                
            ];

        }else {
            
            return [

                'program' => 'required',
                'semester' => 'required',
                'course' => ['required', 'string'],
                'course_code' => ['required', 'string'],
                'Book' => ['mimes:pdf'],
                //'Slide' => ['mimes:pdf'],
                'Pasco' => ['mimes:pdf'],
            ];
        }
    }
}
