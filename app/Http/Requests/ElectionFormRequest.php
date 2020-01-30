<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ElectionFormRequest extends Request
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
            
            'president_id' => 'integer',
            'secretary_id' => 'integer',
            'mp_id' => 'integer'

        ];
    }
}
