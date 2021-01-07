<?php

namespace App\Http\Requests\Chapitre\Seven;

use Illuminate\Foundation\Http\FormRequest;

class CommercialProduct extends FormRequest
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

        'citesDataCommProdTitle' => ['required', 'string', 'max:30'],
        'citesDataCommProdText' => ['required', 'string', 'max:5000'],

        'citesDataCommProdMinTabTitleName' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabTitleKilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTableMin1' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin1Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin2' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin2Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin3' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin3Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin4' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin4Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin5' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin5Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin6' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin6Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin7' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin7Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTableMin8' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin8Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin9' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin9Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin10' => ['required', 'string', 'max:30'],
        'citesDataCommProdMinTabMin10Kilo' => ['required', 'string', 'max:30'],

        'citesDataCommProdVegTabTitleName' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabTitleKilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg1' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg1Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg2' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg2Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg3' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg3Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg4' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg4Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg5' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg5Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg6' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg6Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg7' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg7Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg8' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg8Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg9' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg9Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg10' => ['required', 'string', 'max:30'],
        'citesDataCommProdVegTabVeg10Kilo' => ['required', 'string', 'max:30'],

        'citesDataCommProdAniTabTitleName' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabTitleKilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni1' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni1Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni2' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni2Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni3' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni3Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni4' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni4Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni5' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni5Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni6' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni6Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni7' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni7Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni8' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni8Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni9' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni9Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni10' => ['required', 'string', 'max:30'],
        'citesDataCommProdAniTabAni10Kilo' => ['required', 'string', 'max:30'],

        'citesDataCommProdConTabTitleName' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabTitleKilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon1' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon1Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon2' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon2Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon3' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon3Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon4' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon4Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon5' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon5Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon6' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon6Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon7' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon7Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon8' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon8Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon9' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon9Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon10' => ['required', 'string', 'max:30'],
        'citesDataCommProdConTabCon10Kilo' => ['required', 'string', 'max:30'],

        'citesDataCommProdSusTabTitleName' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabTitleKilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus1' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus1Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus2' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus2Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus3' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus3Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus4' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus4Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus5' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus5Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus6' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus6Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus7' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus7Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus8' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus8Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus9' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus9Kilo' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus10' => ['required', 'string', 'max:30'],
        'citesDataCommProdSusTabSus10Kilo' => ['required', 'string', 'max:30'],

        'citesDataCommProdTextExplain' => ['required', 'string', 'max:5000'],

        ];
    }
}
