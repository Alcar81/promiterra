<?php

namespace App\Models\Chapitre\Trois;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mountshields extends Model
{
    protected $fillable = [
        'MountShieldName',
        'MountShieldVersion',
        'MountShieldType',
        'MountShieldPiercing',
        'MountShieldSharp',
        'MountShieldBlunt',
        'MountShieldFire',
        'MountShieldSpell',
        'MountShieldCost',               
        ];
}
