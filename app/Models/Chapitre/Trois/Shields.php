<?php

namespace App\Models\Chapitre\Trois;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shields extends Model
{
    protected $fillable = [   
        
        'ShieldName',
        'ShieldVersion',
        'ShieldPhysic',
        'ShieldMinusFields',
        'ShieldFace',
        'ShieldFlank',
        'ShieldBack',
        'ShieldProperty1',
        'ShieldProperty2',
        'ShieldCost',
    
    ];
    
}
