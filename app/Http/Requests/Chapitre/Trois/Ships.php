<?php

namespace App\Http\Requests\Chapitre\Trois;

use Illuminate\Foundation\Http\FormRequest;

class Ships extends FormRequest
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
        'ShipdName' => ['required', 'string', 'max:20'],
        'ShipVersion' => ['required', 'string', 'max:4'],            
        'ShipType' => ['required', 'string', 'max:30'], 
        'ShipHighsea' => ['required', 'string', 'in:yes,no'],
        'ShipNbrCrew' => ['required', 'numeric', 'max:2'],
        'ShipNbrPassenger' => ['required', 'numeric', 'max:3'],
        'ShipNbrCannon' => ['required', 'numeric', 'max:2'],
        'ShipNbrCargo' => ['required', 'numeric', 'max:5'], 
        'ShipArea' => ['required', 'string', 'max:20'],
        'ShipSpeed' => ['required', 'numeric', 'max:1'],
        'ShipManeuverability' => ['required', 'numeric', 'max:4'],
        'ShipPv' => ['required', 'numeric', 'max:5'],
        'ShipCost' => ['required', 'numeric', 'max:6'],
        ];
    }
}
