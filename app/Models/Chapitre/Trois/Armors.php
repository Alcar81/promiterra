<?php

namespace App\Models\Chapitre\Trois;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armors extends Model
{
    protected $fillable = [ 
    'ArmorCategory',            
    'ArmorVersion',           
    'ArmorName',            
    'ArmorPiercing',
    'ArmorSharp',
    'ArmorBlunt',
    'ArmorFire',
    'ArmorSpell',
    'ArmorClutter',
    'ArmorMagic',                       
    'ArmorProperty1',
    'ArmorProperty2',
    'ArmorCost',  
    ];
}
