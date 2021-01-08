<?php

namespace App\Http\Requests\Chapitre\Sept;

use Illuminate\Foundation\Http\FormRequest;

class Tax extends FormRequest
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

            'citesDataTaxTitle' => ['required', 'string', 'max:30'],
            'citesDataTaxText' => ['required', 'string', 'max:5000'],
            'citesDataTaxTableTitle' => ['required', 'string', 'max:30'],
            'citesDataTaxTableTitleHouse1' => ['required', 'string', 'max:30'],
            'citesDataTaxTableTitleHouse2' => ['required', 'string', 'max:30'],
            'citesDataTaxTableTitleHouse3' => ['required', 'string', 'max:30'],
            'citesDataTaxTableTitleHouse4' => ['required', 'string', 'max:30'],
            'citesDataTaxTableTitleHouse5' => ['required', 'string', 'max:30'],
            'citesDataTaxTableTitleHouse6' => ['required', 'string', 'max:30'],
            'citesDataTaxTableTitleHouse7' => ['required', 'string', 'max:30'],
            'citesDataTaxTableTitleHouse8' => ['required', 'string', 'max:30'],
            'citesDataTaxTableTitleHouse9' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse1House1' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse1House2' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse1House3' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse1House4' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse1House5' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse1House6' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse1House7' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse1House8' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse1House9' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse2House1' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse2House2' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse2House3' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse2House4' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse2House5' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse2House6' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse2House7' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse2House8' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse2House9' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse3House1' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse3House2' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse3House3' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse3House4' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse3House5' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse3House6' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse3House7' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse3House8' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse3House9' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse4House1' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse4House2' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse4House3' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse4House4' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse4House5' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse4House6' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse4House7' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse4House8' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse4House9' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse5House1' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse5House2' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse5House3' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse5House4' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse5House5' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse5House6' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse5House7' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse5House8' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse5House9' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse6House1' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse6House2' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse6House3' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse6House4' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse6House5' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse6House6' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse6House7' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse6House8' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse6House9' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse7House1' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse7House2' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse7House3' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse7House4' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse7House5' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse7House6' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse7House7' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse7House8' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse7House9' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse8House1' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse8House2' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse8House3' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse8House4' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse8House5' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse8House6' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse8House7' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse8House8' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse8House9' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse9House1' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse9House2' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse9House3' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse9House4' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse9House5' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse9House6' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse9House7' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse9House8' => ['required', 'string', 'max:30'],
            'citesDataTaxTableHouse9House9' => ['required', 'string', 'max:30'],
            'citesDataTaxTextBuyExempleTitle' => ['required', 'string', 'max:30'],
            'citesDataTaxTextBuyExemple' => ['required', 'string', 'max:5000'],
            'citesDataTaxTextSellExempleTitle' => ['required', 'string', 'max:30'],
            'citesDataTaxTextSellExemple' => ['required', 'string', 'max:5000'],

        ];
    }
}
