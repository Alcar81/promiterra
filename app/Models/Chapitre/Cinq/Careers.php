<?php

namespace App\Models\Chapitre\Cinq;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    protected $fillable = [      
        
        'CareerVersion',
        'CareerIDClass',
        'CareerParent1Name',
        'CareerIDParent1',
        'CareerParent2Name',
        'CareerIDParent2',
        'CareerClassName',
        'CareerImage', //The path you uploader the image
        'CareerImageArtist',
        'CareerDescription',
        'CareerPhysical',
        'CareerMental',
        'CareerReaction',
        'CareerManual',
        'CareerAbility',
        'CareerSenses',
        'CareerSocial',
        'CareerKnowledge',
        'CareerAuchoix',
        'CareerWeapons1',
        'CareerWeapons2',
        'CareerWeapons3',
        'CareerWeapons4',
        'CareerWeapons5',
        'CareerWeapons6',
        'CareerWeapons7',
        'CareerWeapons8',
        'CareerWeapons9',
        'CareerArmors1',
        'CareerArmors2',
        'CareerArmors3',
        'CareerSpecials1',
        'CareerSpecials2',
        'CareerSpecials3',
        'CareerAction1Name',
        'CareerAction1Desc',
        'CareerAction2Name',
        'CareerAction2Desc',
        'CareerAction3Name',
        'CareerAction3Desc',
        'CareerAction4Name',
        'CareerAction4Desc',
        'CareerAction5Name',
        'CareerAction5Desc',
        'CareerAction6Name',
        'CareerAction6Desc',
        'CareerAction7Name',
        'CareerAction7Desc',
        'CareerAction8Name',
        'CareerAction8Desc',
        'CareerTalent1Name',
        'CareerTalent1Desc',
        'CareerTalent2Name',
        'CareerTalent2Desc',
        'CareerTalent3Name',
        'CareerTalent3Desc',
        'CareerTalent4Name',
        'CareerTalent4Desc',
        
        

    ];

}
