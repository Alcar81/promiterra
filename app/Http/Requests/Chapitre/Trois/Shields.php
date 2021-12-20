<?php

namespace App\Http\Requests\Chapitre\Trois;

use Illuminate\Foundation\Http\FormRequest;

class Shields extends FormRequest
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

            'ShieldName' => ['required', 'string', 'max:20'],
            'ShieldVersion' => ['required', 'string', 'max:4'],            
            'ShieldPhysic' => ['required', 'string', 'max:20'], 
            'ShieldMinusFields' => ['required', 'numeric', 'max:1'],
            'ShieldFace' => ['required', 'numeric', 'max:1'],
            'ShieldFlank' => ['required', 'numeric', 'max:1'],
            'ShieldBack' => ['required', 'string', 'max:2'],
            'ShieldProperty1' => ['required', 'string', 'max:20'], 
            'ShieldProperty2' => ['required', 'string', 'max:20'], 
            'ShieldCost' => ['required', 'numeric', 'max:6'], 
        ];
    }
}
