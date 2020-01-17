<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CandidateFormRequest extends Request
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
            
            'name' => 'required|string',

            'avatar' => 'required|image|mimes:png,jpeg,jpg',

            'bio' => 'nullable|string|',

            'presidenttial' => 'nullable|boolen',

            'secretary' => 'nullable|boolen',

            'mp' => 'nullable|boolen'
        ];
    }
}
