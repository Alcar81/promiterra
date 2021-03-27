<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Character;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Character::class, function (Faker $faker) {
    return [
        'user_id' => 5,
        'name' => 'Benjamin',
        'age' => 21,
        'experience' => 169,
        'date_of_birth' => 26,
        'month_of_birth' => 6,
        'year_of_birth' => 835,
        'essence_total' => 132,
        'essence_game' => 49,
        'house_name' => 'Orphelin d’Ambrie',
        'house_dogma' => '',
        'title' => '1ere classe',
        'career_name' => 'Forgeron',
        'career_physic' => 6,
        'career_physic_bonus' => 0,
        'career_physic_penalty' => 1,
        'career_mental' => 6,
        'career_mental_bonus' => 0,
        'career_mental_penalty' => 0,
        'career_reaction' => 4,
        'career_reaction_bonus' => 0,
        'career_reaction_penalty' => 0,
        'life_point_max' => 141,
        'life_point_game' => 127,
        'life_point_bonus' => 0,
        'life_point_percentage_bonus' => 10,
        'magic_point_max' => 14,
        'magic_point_game' => 6,
        'magic_point_bonus' => 5,
        'magic_point_percentage_bonus' => 0,
        'magic_force_arcana_max' => 38,
        'magic_force_arcana_game' => 38,
        'magic_force_arcana_bonus' => 1,
        'magic_force_arcana_percentage_bonus' => 40,
        'magic_force_holy_max' => 38,
        'magic_force_holy_game' => 38,
        'magic_force_holy_bonus' => 0,
        'magic_force_holy_percentage_bonus' => 40,
        'magic_force_cursed_max' => 38,
        'magic_force_cursed_game' => 38,
        'magic_force_cursed_bonus' => 0,
        'magic_force_cursed_percentage_bonus' => 40,
        'gold' => 130,
        'bank'=> 0,
        'lap_speed' => 7,
        'background' => $this->faker->paragraph(),
        'logbook' => $this->faker->paragraph(),
        'equipped_weapon' => 'Canne de combat',
        'equipped_armor' => 'Tunique religieuse',
        'equipped_shield' => 'Petit bouclier',
        'equipped_spellbook' => '',
        'equipped_symbol' => '',
        'influence_total' => 79,
        'influence_meraltor' => 5,
        'influence_aravas' => 0,
        'influence_clergy' => 4,
        'influence_berrouve' => 0,
        'influence_harlog' => 0,
        'influence_brotherhood' => 3,
        'influence_duloir' => 0,
        'influence_tiar' => 1,
        'influence_wolfcircle' => 0,
        'influence_arcadis' => 0,
        'influence_komedail' => 0,
        'influence_savie' => 3,
        'influence_mortuterra' =>0,
        'influence_collectorsguild' => 0,
    ];
});
