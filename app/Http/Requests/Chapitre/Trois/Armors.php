<?php

namespace App\Http\Requests\Chapitre\Trois;

use Illuminate\Foundation\Http\FormRequest;

class Armors extends FormRequest
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

            'ArmorCategory' => ['required', 'string', 'max:20'],            
            'ArmorVersion' => ['required', 'string', 'max:4'],           
            'ArmorName' => ['required', 'string', 'max:20'],            
            'ArmorPiercing'=> ['required', 'numeric', 'max:3'],
            'ArmorSharp'=> ['required', 'numeric', 'max:3'],
            'ArmorBlunt'=> ['required', 'numeric', 'max:3'],
            'ArmorFire'=> ['required', 'numeric', 'max:3'],
            'ArmorSpell' => ['required', 'numeric', 'max:3'],
            'ArmorClutter' => ['required', 'string', 'max:4'],
            'ArmorMagic' => ['required', 'string', 'max:2'],                       
            'ArmorProperty1' => ['required', 'string', 'max:20'],
            'ArmorProperty2'=> ['required', 'string', 'max:20'],
            'ArmorCost' => ['required', 'numeric', 'max:6'], 
        ];
    }
}
