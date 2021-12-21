<?php

namespace App\Http\Requests\Chapitre\Trois;

use Illuminate\Foundation\Http\FormRequest;

class Grimoires extends FormRequest
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
            'GrimoireName' => ['required', 'string', 'max:20'],
            'GrimoireVersion' => ['required', 'string', 'max:4'],            
            'GrimoireNoSymbol' => ['required', 'numeric', 'max:23'], 
            'GrimoireHoly' => ['required', 'numeric', 'max:1'],
            'GrimoireDamn' => ['required', 'numeric', 'max:1'],           
            'GrimoireCost' => ['required', 'numeric', 'max:6'],
        ];
    }
}
