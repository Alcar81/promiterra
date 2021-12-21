<?php

namespace App\Models\Chapitre\Trois;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grimoires extends Model
{
    protected $fillable = [   
        
        'GrimoireName',
        'GrimoireVersion',
        'GrimoireNoSymbol',
        'GrimoireHoly',
        'GrimoireDamn',
        'GrimoireCost',               
        ];
}
