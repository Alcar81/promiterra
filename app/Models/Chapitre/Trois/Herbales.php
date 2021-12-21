<?php

namespace App\Models\Chapitre\Trois;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herbales extends Model
{
    protected $fillable = [
        'HerbaleName',
        'HerbaleVersion',
        'HerbalePv',
        'HerbaleCost',               
        ]; 
}
