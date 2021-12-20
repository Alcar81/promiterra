<?php

namespace App\Http\Requests\Chapitre\Trois;

use Illuminate\Foundation\Http\FormRequest;

class Objects extends FormRequest
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

            'ObjectName' => ['required', 'string', 'max:20'],
            'ObjectVersion' => ['required', 'string', 'max:4'],            
            'ObjectEffect' => ['required', 'string', 'max:100'], 
            'ObjectCost' => ['required', 'numeric', 'max:6'], 
        ];
    }
}
