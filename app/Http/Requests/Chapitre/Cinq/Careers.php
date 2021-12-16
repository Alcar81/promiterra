<?php

namespace App\Http\Requests\Chapitre\Cinq;

use Illuminate\Foundation\Http\FormRequest;

class Careers extends FormRequest
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
            'CareerVersion' => ['required', 'numeric'],
            'CareerIDClass'=> ['required', 'numeric', 'max:3'],
            'CareerParent1Name'=> ['required', 'string', 'max:20'],
            'CareerIDParent1'=> ['required', 'numeric', 'max:3'],
            'CareerParent2Name'=> ['required', 'string', 'max:20'],
            'CareerIDParent2'=> ['required', 'numeric', 'max:3'],
            'CareerClassName' => ['required', 'string', 'max:20'],
            'CareerImage'  => ['required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'],
            'CareerImageArtist' => ['required', 'string', 'max:20'],
            'CareerDescription' => ['required', 'string', 'max:5000'],
            'CareerPhysical' => ['required', 'numeric', 'max:1'],
            'CareerMental' => ['required', 'numeric', 'max:1'],
            'CareerReaction' => ['required', 'numeric', 'max:1'],
            'CareerManual' => ['required'],
            'CareerAbility' => ['required'],
            'CareerSenses' => ['required'],
            'CareerSocial' => ['required'],
            'CareerKnowledge' => ['required'],
            'CareerAuchoix' => ['required'],
            'CareerWeapons1' => ['string', 'max:20'],
            'CareerWeapons2' => ['string', 'max:20'],
            'CareerWeapons3' => ['string', 'max:20'],
            'CareerWeapons4' => ['string', 'max:20'],
            'CareerWeapons5' => ['string', 'max:20'],
            'CareerWeapons6' => ['string', 'max:20'],
            'CareerWeapons7' => ['string', 'max:20'],
            'CareerWeapons8' => ['string', 'max:20'],
            'CareerWeapons9' => ['string', 'max:20'],
            'CareerArmors1' => ['string', 'max:20'],
            'CareerArmors2' => ['string', 'max:20'],
            'CareerArmors3' => ['string', 'max:20'],
            'CareerSpecials1' => ['string', 'max:20'],
            'CareerSpecials2' => ['string', 'max:20'],
            'CareerSpecials3' => ['string', 'max:20'],
            'CareerAction1Name' => ['string'],
            'CareerAction1Desc' => ['string'],
            'CareerAction2Name' => ['string'],
            'CareerAction2Desc' => ['string'],
            'CareerAction3Name' => ['string'],
            'CareerAction3Desc' => ['string'],
            'CareerAction4Name' => ['string'],
            'CareerAction4Desc' => ['string'],
            'CareerAction5Name' => ['string'],
            'CareerAction5Desc' => ['string'],
            'CareerAction6Name' => ['string'],
            'CareerAction6Desc' => ['string'],
            'CareerAction7Name' => ['string'],
            'CareerAction7Desc' => ['string'],
            'CareerAction8Name' => ['string'],
            'CareerAction8Desc' => ['string'],
            'CareerTalent1Name' => ['string'],
            'CareerTalent1Desc' => ['string'],
            'CareerTalent2Name' => ['string'],
            'CareerTalent2Desc' => ['string'],
            'CareerTalent3Name' => ['string'],
            'CareerTalent3Desc' => ['string'],
            'CareerTalent4Name' => ['string'],
            'CareerTalent4Desc' => ['string'],            
        ];
    }
}
