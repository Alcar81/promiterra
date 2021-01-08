<?php

namespace App\Http\Requests\Chapitre\Sept;

use Illuminate\Foundation\Http\FormRequest;

class TimeTravel extends FormRequest
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

            'citesDataTimeTravelTitle' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelText' => ['required', 'string', 'max:5000'],
            'citesDataTimeTravelNDOF1' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOF2' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOF3' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOF4' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOF5' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOF6' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOF7' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOF8' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOF9' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOF10' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOF11' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOF12' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOF13' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOF14' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOF15' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOM1' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOM2' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOM3' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOM4' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOM5' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOM6' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOM7' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOM8' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOM9' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOM10' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOM11' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOM12' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOM13' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOM14' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelNDOM15' => ['required', 'string', 'max:30'],
            'citesDataTimeTravelText2' => ['required', 'string', 'max:5000'],

        ];
    }
}
