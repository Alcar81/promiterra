<?php

namespace App\Http\Requests\Chapitre\Trois;

use Illuminate\Foundation\Http\FormRequest;

class Herbales extends FormRequest
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
            'HerbaleName' => ['required', 'string', 'max:20'],
            'HerbaleVersion' => ['required', 'string', 'max:4'],            
            'HerbalePv' => ['required', 'numeric', 'max:2'], 
            'HerbaleCost' => ['required', 'numeric', 'max:2'],            
        ];
    }
}