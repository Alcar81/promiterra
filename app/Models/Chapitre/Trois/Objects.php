<?php

namespace App\Models\Chapitre\Trois;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objects extends Model
{
    protected $fillable = [   
        
    'ObjectName',
    'ObjectVersion',
    'ObjectEffect',
    'ObjectCost',               
    ];
}
