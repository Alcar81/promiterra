<?php

namespace App\Http\Requests\Chapitre\Trois;

use Illuminate\Foundation\Http\FormRequest;

class Mounts extends FormRequest
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
        'MountName' => ['required', 'string', 'max:20'],
        'MountVersion' => ['required', 'string', 'max:4'],            
        'MountPv' => ['required', 'numeric', 'max:3'],
        'MountShield' => ['required', 'string', 'max:20'],
        'MountPhysic'=> ['required', 'numeric', 'max:1'],
        'MountMental'=> ['required', 'numeric', 'max:1'],
        'MountReact'=> ['required', 'numeric', 'max:1'],
        'MountMovement'=> ['required', 'numeric', 'max:2'],
        'MountCost' => ['required', 'numeric', 'max:5'],
        ];
    }
}
