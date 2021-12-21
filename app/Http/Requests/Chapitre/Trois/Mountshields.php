<?php

namespace App\Http\Requests\Chapitre\Trois;

use Illuminate\Foundation\Http\FormRequest;

class Mountshields extends FormRequest
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
        'MountShieldName' => ['required', 'string', 'max:20'],
        'MountShieldVersion' => ['required', 'string', 'max:4'],            
        'MountShieldType' => ['required', 'string', 'max:20'],
        'MountShieldPiercing' => ['required', 'numeric', 'max:3'],
        'MountShieldSharp'=> ['required', 'numeric', 'max:3'],
        'MountShieldBlunt'=> ['required', 'numeric', 'max:3'],
        'MountShieldFire'=> ['required', 'numeric', 'max:3'],
        'MountShieldSpell'=> ['required', 'numeric', 'max:3'],
        'MountShieldCost' => ['required', 'numeric', 'max:5'],
        ];
    }
}
