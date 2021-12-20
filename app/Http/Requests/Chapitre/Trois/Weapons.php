<?php

namespace App\Http\Requests\Chapitre\Trois;

use Illuminate\Foundation\Http\FormRequest;

class Weapons extends FormRequest
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
            
            'WeaponCategory' => ['required', 'string', 'max:20'],
            'WeaponSubCategory' => ['required', 'string', 'max:20'],
            'WeaponVersion' => ['required', 'string', 'max:4'],           
            'WeaponName' => ['required', 'string', 'max:20'],
            'WeaponType1' => ['required', 'string', 'max:20'],
            'WeaponType2'=> ['required', 'string', 'max:20'],
            'WeaponNumberHands'=> ['required', 'numeric', 'max:1'],
            'WeaponScope'=> ['required', 'numeric', 'max:2'],
            'WeaponAttack'=> ['required', 'numeric', 'max:3'],
            'WeaponCritical'=> ['required', 'numeric', 'max:4'],
            'WeaponFace' => ['required', 'numeric', 'max:2'],
            'WeaponFlank' => ['required', 'numeric', 'max:2'],
            'WeaponBack' => ['required', 'numeric', 'max:2'],
            'WeaponCost' => ['required', 'numeric', 'max:6'],
            'WeaponClumsiness' => ['required', 'numeric', 'max:2'],
            'WeaponProperty1' => ['required', 'string', 'max:20'],
            'WeaponProperty2'=> ['required', 'string', 'max:20'],
        ];
    }
}
