<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\City;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(City::class, function (Faker $faker) {

    return [
            'name' => $this->faker->sentence(2, true),
            'year' => $this->faker->year,
            'house'=> $this->faker->sentence(2, true),
            'yearfoundation' => $this->faker->year,
            'size' =>$this->faker->sentence(2, true),
            'weather'=> $this->faker->sentence(2, true),
            'accent1'=> $this->faker->sentence(2, true),
            'accent2'=> $this->faker->sentence(2, true),
            'accent3'=> $this->faker->sentence(2, true),
            'localSpeciality'=> $this->faker->sentence(2, true),
            'mayor'=> $this->faker->sentence(2, true),
            'urbanPopulation' => 1000,
            'ruralPopulation' => 1000,
            'tradeMax' => 5000,
            'localDrink'=> $this->faker->sentence(2, true),
            'education' => 5,
            'fortification' => 10,
            'lawAndOrder' => 4,
            'technology' => 8,
            'wealth' => 7,
            'economy1'=> $this->faker->sentence(2, true),
            'economy2'=> $this->faker->sentence(2, true),
            'economy3'=> $this->faker->sentence(2, true),
            'economy4'=> $this->faker->sentence(2, true),
            'economy5'=> $this->faker->sentence(2, true),
            'economy6'=> $this->faker->sentence(2, true),
            'economy7'=> $this->faker->sentence(2, true),
            'economy8'=> $this->faker->sentence(2, true),
            'economy9'=> $this->faker->sentence(2, true),
            'economy10'=> $this->faker->sentence(2, true),
            'offer1'=> $this->faker->sentence(2, true),
            'offer2'=> $this->faker->sentence(2, true),
            'nextCity1'=> $this->faker->sentence(2, true),
            'nextCity2'=> $this->faker->sentence(2, true),
            'nextCity3'=> $this->faker->sentence(2, true),
            'nextCity4'=> $this->faker->sentence(2, true),
            'nextCity5'=> $this->faker->sentence(2, true),
            'nextCity6'=> $this->faker->sentence(2, true),
            'offer1NextCity1'=> $this->faker->sentence(2, true),
            'offer2NextCity1'=> $this->faker->sentence(2, true),
            'offer1NextCity2'=> $this->faker->sentence(2, true),
            'offer2NextCity2'=> $this->faker->sentence(2, true),
            'offer1NextCity3'=> $this->faker->sentence(2, true),
            'offer2NextCity3'=> $this->faker->sentence(2, true),
            'offer1NextCity4'=> $this->faker->sentence(2, true),
            'offer2NextCity4'=> $this->faker->sentence(2, true),
            'offer1NextCity5'=> $this->faker->sentence(2, true),
            'offer2NextCity5'=> $this->faker->sentence(2, true),
            'offer1NextCity6'=> $this->faker->sentence(2, true),
            'offer2NextCity6'=> $this->faker->sentence(2, true),
            'demand1'=> $this->faker->sentence(2, true),
            'demand2'=> $this->faker->sentence(2, true),
            'demand1NextCity1'=> $this->faker->sentence(2, true),
            'demand2NextCity1'=> $this->faker->sentence(2, true),
            'demand1NextCity2'=> $this->faker->sentence(2, true),
            'demand2NextCity2'=> $this->faker->sentence(2, true),
            'demand1NextCity3'=> $this->faker->sentence(2, true),
            'demand2NextCity3'=> $this->faker->sentence(2, true),
            'demand1NextCity4'=> $this->faker->sentence(2, true),
            'demand2NextCity4'=> $this->faker->sentence(2, true),
            'demand1NextCity5'=> $this->faker->sentence(2, true),
            'demand2NextCity5'=> $this->faker->sentence(2, true),
            'demand1NextCity6'=> $this->faker->sentence(2, true),
            'demand2NextCity6'=> $this->faker->sentence(2, true),
            'story' => $this->faker->paragraph(),
            'version' => 3,
            'chapter' => 7,
    ];
});

