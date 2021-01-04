<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::truncate();

        City::create(['name' => 'Hebernia']);
        City::create(['year' => 831]);
        City::create(['house'=> 'Berrouve']);
        City::create(['yearfoundation' => 357]);
        City::create(['size' => 'Capitale']);
        City::create(['weather'=> 'Sec']);
        City::create(['accent1'=> 'Allemand']);
        City::create(['accent2'=> 'Arable']);
        City::create(['localSpeciality'=> 'Steak de taureau']);
        City::create(['mayor'=> 'Colonel Vorgen Berrouve, beau-frère de Ilianne']);
        City::create(['urbanPopulation' => 1000]);
        City::create(['ruralPopulation' => 1000]);
        City::create(['tradeMax' => 5000]);
        City::create(['localDrink'=> 'Whiskey']);
        City::create(['education' => 5]);
        City::create(['fortification' => 10]);
        City::create(['lawAndOrder' => 4]);
        City::create(['technology' => 8]);
        City::create(['wealth' => 7]);
        City::create(['economy1'=> 'Administration']);
        City::create(['economy2'=> 'Armée']);
        City::create(['economy3'=> 'Clergé']);
        City::create(['economy4'=> 'Commerce']);
        City::create(['economy5'=> 'Construction']);
        City::create(['economy6'=> 'Forge']);
        City::create(['economy7'=> 'Marine']);
        City::create(['economy8'=> 'Pêche']);
        City::create(['economy9'=> 'Tourisme']);
        City::create(['economy10'=> '']);
        City::create(['offer1'=> 'Épices exotique']);
        City::create(['offer2'=> 'Salpêtre']);
        City::create(['nextCity1'=> 'Neo-Hebernia']);
        City::create(['nextCity2'=> 'Stenboek']);
        City::create(['offer1NextCity1'=> 'Huile']);
        City::create(['offer2NextCity1'=> '']);
        City::create(['offer1NextCity2'=> 'Argent']);
        City::create(['offer2NextCity2'=> '']);
        City::create(['demand1'=> 'Or']);
        City::create(['demand2'=> 'Trophées de monstre']);
        City::create(['demand1NextCity1'=> 'Bière']);
        City::create(['demand2NextCity1'=> '']);
        City::create(['demand1NextCity2'=> 'Tabac']);
        City::create(['demand2NextCity2'=> '']);
        City::create(['story' => $this->faker->paragraph()]);
        City::create(['version' => 3]);
        City::create(['chapter' => 7]);
    }
}
