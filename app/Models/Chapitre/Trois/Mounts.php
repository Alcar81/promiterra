<?php

namespace App\Models\Chapitre\Trois;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mounts extends Model
{
    protected $fillable = [
        'MountName',
        'MountVersion',
        'MountPv',
        'MountShield',
        'MountPhysic',
        'MountMental',
        'MountReact',
        'MountMovement',
        'MountCost',               
        ]; 
}
