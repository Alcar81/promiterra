<?php

namespace App\Models\Chapitre\Trois;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapons extends Model
{
    protected $fillable = [      
        
        'WeaponCategory',
        'WeaponSubCategory',
        'WeaponVersion',                
        'WeaponName',
        'WeaponType1',
        'WeaponType2',
        'WeaponNumberHands',
        'WeaponScope',
        'WeaponAttack',
        'WeaponCritical',
        'WeaponFace',
        'WeaponFlank',
        'WeaponBack',
        'WeaponCost',
        'WeaponClumsiness',
        'WeaponProperty1',
        'WeaponProperty2',
    
    ];
}
