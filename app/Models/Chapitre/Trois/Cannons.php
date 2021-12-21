<?php

namespace App\Models\Chapitre\Trois;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cannons extends Model
{
    protected $fillable = [
        'CannonName',
        'CannonVersion',
        'CannonMovement',
        'CannonScope',
        'CannonRange',
        'CannonDamage',
        'CannonTouch',
        'CannonTrouble',
        'CannonCost',
        'CannonBallCost',
    ];
}
