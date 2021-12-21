<?php

namespace App\Models\Chapitre\Trois;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bombs extends Model
{
    protected $fillable = [      
        
        'BombName',
        'BombVersion',
        'BombType1',
        'BombType2',                
        'BombR1',
        'BombR2',
        'BombR3',
        'BombR4',
        'BombR5',
        'BombCost',
        'BombClumsiness',
    
    ];
}
