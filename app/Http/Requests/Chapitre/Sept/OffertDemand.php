<?php

namespace App\Http\Requests\Chapitre\Sept;

use Illuminate\Foundation\Http\FormRequest;

class OffertDemand extends FormRequest
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

            'citesDataOffertDemandTitle' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandText' => ['required', 'string', 'max:5000'],
            'citesDataOffertDemandBuytitle' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandBuytext' => ['required', 'string', 'max:5000'],
            'citesDataOffertDemandSellTitle' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandSellText' => ['required', 'string', 'max:5000'],
            'citesDataOffertDemandSellTableTitle1' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandSellTableTitle2' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandSellTableTitle3' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandSellTableOffert' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandSellTableOffertCostBuy' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandSellTableOffertCostSell' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandSellTableNextOffert' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandSellTableNextOffertCostBuy' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandSellTableNextOffertCostSell' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandSellTableNoOffertNoDemand' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandSellTableNoOffertNoDemandCostBuy' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandSellTableNoOffertNoDemandCostSell' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandSellTableNoOffert3' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandSellTableNoOffert3CostBuy' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandSellTableNoOffert3CostSell' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandSellTableNoOffert4CostBuy' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTitle' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxText1' => ['required', 'string', 'max:5000'],
            'citesDataOffertDemandTradeMaxTableTitle1' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableTitle2' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableTitle3' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableTitle4' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableWealthSize1' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableWealthSize2' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableWealthSize3' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableWealthSize4' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableWealthSize5' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableWealthSize6' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableWealthSize7' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableWealthSize8' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableWealthSize9' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableWealthSize10' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableWealthSize11' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableWealthSize12' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableWealthSize13' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableWealthSize14' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableMax1' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableMax2' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableMax3' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableMax4' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableMax5' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableMax6' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableMax7' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableMax8' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableMax9' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableMax10' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableMax11' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableMax12' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableMax13' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxTableMax14' => ['required', 'string', 'max:30'],
            'citesDataOffertDemandTradeMaxText2' => ['required', 'string', 'max:5000'],

        ];
    }
}
