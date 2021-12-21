<?php

namespace App\Http\Requests\Chapitre\Trois;

use Illuminate\Foundation\Http\FormRequest;

class Cannons extends FormRequest
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
            'CannonName' => ['required', 'string', 'max:20'],
            'CannonVersion' => ['required', 'string', 'max:4'],
            'CannonMovement' => ['required', 'numeric', 'max:1'],           
            'CannonScope' => ['required', 'numeric', 'max:2'], 
            'CannonRange' => ['required', 'numeric', 'max:1'],
            'CannonDamage' => ['required', 'numeric', 'max:3'],
            'CannonTouch' => ['required', 'numeric', 'max:1'],
            'CannonTrouble' => ['required', 'numeric', 'max:1'],
            'CannonCost' => ['required', 'numeric', 'max:5'], 
            'CannonBallCost' => ['required', 'numeric', 'max:20'],
            ];
    }
}
