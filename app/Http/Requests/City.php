<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class City extends FormRequest
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
            'name' => ['required', 'string', 'max:30'],
            'year' => ['required', 'string', 'max:100'],
            'house'=> ['required', 'string', 'max:100'],
            'yearfoundation' => ['required', 'numeric'],
            'size' => ['required', 'string', 'max:30'],
            'weather' => ['required', 'string', 'max:30'],
            'accent1' => ['required', 'string', 'max:30'],
            'accent2' => ['required', 'string', 'max:30'],
            'accent3' => ['required', 'string', 'max:30'],
            'localSpeciality' => ['required', 'string', 'max:30'],
            'mayor'=> ['required', 'string', 'max:150'],
            'urbanPopulation' => ['required', 'numeric'],
            'ruralPopulation' => ['required', 'numeric'],
            'tradeMax' => ['required', 'numeric'],
            'localDrink' => ['required', 'string', 'max:30'],
            'education' => ['required', 'numeric', 'max:10'],
            'fortification' => ['required', 'numeric', 'max:10'],
            'lawAndOrder' => ['required', 'numeric', 'max:10'],
            'technology' => ['required', 'numeric', 'max:10'],
            'wealth' => ['required', 'numeric', 'max:10'],
            'economy1' => ['required', 'string', 'max:30'],
            'economy2' => ['string', 'max:30'],
            'economy3' => ['string', 'max:30'],
            'economy4' => ['string', 'max:30'],
            'economy5' => ['string', 'max:30'],
            'economy6' => ['string', 'max:30'],
            'economy7' => ['string', 'max:30'],
            'economy8' => ['string', 'max:30'],
            'economy9' => ['string', 'max:30'],
            'economy10' => ['string', 'max:30'],
            'offer1' => ['required', 'string', 'max:30'],
            'offer2' => ['string', 'max:30'],
            'nextCity1' => ['required', 'string', 'max:30'],
            'nextCity2' => ['required', 'string', 'max:30'],
            'nextCity3' => ['required', 'string', 'max:30'],
            'nextCity4' => ['required', 'string', 'max:30'],
            'nextCity5' => ['required', 'string', 'max:30'],
            'nextCity6' => ['required', 'string', 'max:30'],
            'offer1NextCity1' => ['required', 'string', 'max:30'],
            'offer2NextCity1' => ['string', 'max:30'],
            'offer1NextCity2' => ['required', 'string', 'max:30'],
            'offer2NextCity2' => ['string', 'max:30'],
            'offer1NextCity3' => ['required', 'string', 'max:30'],
            'offer2NextCity3' => ['string', 'max:30'],
            'offer1NextCity4' => ['required', 'string', 'max:30'],
            'offer2NextCity4' => ['string', 'max:30'],
            'offer1NextCity5' => ['required', 'string', 'max:30'],
            'offer2NextCity5' => ['string', 'max:30'],
            'offer1NextCity6' => ['required', 'string', 'max:30'],
            'offer2NextCity6' => ['string', 'max:30'],
            'demand1' => ['required', 'string', 'max:30'],
            'demand2' => ['string', 'max:30'],
            'demand1NextCity1' => ['required', 'string', 'max:30'],
            'demand2NextCity1' => ['string', 'max:30'],
            'demand1NextCity2' => ['required', 'string', 'max:30'],
            'demand2NextCity2' => ['string', 'max:30'],
            'demand1NextCity3' => ['required', 'string', 'max:30'],
            'demand2NextCity3' => ['string', 'max:30'],
            'demand1NextCity4' => ['required', 'string', 'max:30'],
            'demand2NextCity4' => ['string', 'max:30'],
            'demand1NextCity5' => ['required', 'string', 'max:30'],
            'demand2NextCity5' => ['string', 'max:30'],
            'demand1NextCity6' => ['required', 'string', 'max:30'],
            'demand2NextCity6' => ['string', 'max:30'],
            'story' => ['required', 'string', 'max:5000'],
            'version' => ['required', 'numeric'],
            'chapter' => ['required', 'numeric'],
        ];
    }
}
