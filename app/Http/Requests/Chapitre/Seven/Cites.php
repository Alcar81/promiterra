<?php

namespace App\Http\Requests\Chapitre\Seven;

use Illuminate\Foundation\Http\FormRequest;

class Cites extends FormRequest
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

            'citesTitle' => ['required', 'string', 'max:30'],
            'citesText' => ['required', 'string', 'max:5000'],
            'citesDataTitle' => ['required', 'string', 'max:30'],
            'citesDataDescriptionTitle' => ['required', 'string', 'max:30'],
            'citesDataName' => ['required', 'string', 'max:30'],
            'citesDataNameDescription' => ['required', 'string', 'max:30'],
            'citesDataHouse' => ['required', 'string', 'max:30'],
            'citesDataHouseDescription' => ['required', 'string', 'max:30'],
            'citesDataFoundation' => ['required', 'string', 'max:30'],
            'citesDataFoundationDescription' => ['required', 'string', 'max:30'],
            'citesDataSize' => ['required', 'string', 'max:30'],
            'citesDataSizeDescription' => ['required', 'string', 'max:30'],
            'citesDataAccent' => ['required', 'string', 'max:30'],
            'citesDataAccentDescription' => ['required', 'string', 'max:30'],
            'citesDataUrbanPopulation' => ['required', 'string', 'max:30'],
            'citesDataUrbanPopulationDescription' => ['required', 'string', 'max:30'],
            'citesDataRuralPopulation' => ['required', 'string', 'max:30'],
            'citesDataRuralPolulationDescription' => ['required', 'string', 'max:30'],
            'citesDataMaxTrade' => ['required', 'string', 'max:30'],
            'citesDataMaxTradeDescription' => ['required', 'string', 'max:30'],
            'citesDataLocalDrink' => ['required', 'string', 'max:30'],
            'citesDataLocalDescription' => ['required', 'string', 'max:30'],
            'citesDataMayor' => ['required', 'string', 'max:30'],
            'citesDataMayorDescription' => ['required', 'string', 'max:30'],
            'citesDataEconomy' => ['required', 'string', 'max:30'],
            'citesDataEconomyDescription' => ['required', 'string', 'max:30'],
            'citesDataOffert' => ['required', 'string', 'max:30'],
            'citesDataOfferDescription' => ['required', 'string', 'max:30'],
            'citesDataDemand' => ['required', 'string', 'max:30'],
            'citesDataDemandDescription' => ['required', 'string', 'max:30'],
            'citesDataNextOfferts' => ['required', 'string', 'max:30'],
            'citesDataNextOffertsDescription' => ['required', 'string', 'max:30'],
            'citesDataNextDemands' => ['required', 'string', 'max:30'],
            'citesDataNextDemandsDescription' => ['required', 'string', 'max:30'],
            'citesDataPointsText' => ['required', 'string', 'max:5000'],
            'citesDataNoteName' => ['required', 'string', 'max:30'],
            'citesDataNoteDescriptionName' => ['required', 'string', 'max:30'],
            'citesDataNoteEducation' => ['required', 'string', 'max:30'],
            'citesDataNoteEducationDescription' => ['required', 'string', 'max:30'],
            'citesDataNoteFortification' => ['required', 'string', 'max:30'],
            'citesDataNoteFortificationDescription' => ['required', 'string', 'max:30'],
            'citesDataNoteLawAndOrder' => ['required', 'string', 'max:30'],
            'citesDataNoteLawAndOrderDescription' => ['required', 'string', 'max:30'],
            'citesDataNoteTechnology' => ['required', 'string', 'max:30'],
            'citesDataNoteTechnologyDescription' => ['required', 'string', 'max:30'],
            'citesDataNoteWealth' => ['required', 'string', 'max:30'],
            'citesDataNoteWealthDescription' => ['required', 'string', 'max:30'],

        ];
    }
}
