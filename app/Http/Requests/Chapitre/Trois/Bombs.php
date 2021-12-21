<?php

namespace App\Http\Requests\Chapitre\Trois;

use Illuminate\Foundation\Http\FormRequest;

class Bombs extends FormRequest
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
            'BombName' => ['required', 'string', 'max:20'],
            'BombVersion' => ['required', 'string', 'max:4'],            
            'BombType1' => ['required', 'string', 'max:100'], 
            'BombType2' => ['required', 'numeric', 'max:6'], 
            'BombR1' => ['required', 'numeric', 'max:3'], 
            'BombR2' => ['required', 'numeric', 'max:3'], 
            'BombR3' => ['required', 'numeric', 'max:3'],
            'BombR4' => ['required', 'numeric', 'max:3'],
            'BombR5' => ['required', 'numeric', 'max:3'],
            'BombClumsiness' => ['required', 'numeric', 'max:1'],
            'BombCost' => ['required', 'numeric', 'max:4'],
        ];
    }
}
