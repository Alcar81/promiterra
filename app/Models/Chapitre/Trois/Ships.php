<?php

namespace App\Models\Chapitre\Trois;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ships extends Model
{
    protected $fillable = [
        'ShipName',
        'ShipVersion',
        'ShipType',
        'ShipHighsea',
        'ShipNbrCrew',
        'ShipNbrPassenger',
        'ShipNbrCannon',
        'ShipNbrCargo',
        'ShipArea',
        'ShipSpeed',
        'ShipManeuverability',
        'ShipPv',
        'ShipCost',              
    ];
    
}
