<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Faker\Factory;

$factory->define(\App\Property::class, function (Faker $faker) {
    $faker = Factory::create('pt_BR');
             for ($i = 0; $i < 10; $i++) {
                return [
                    'address' => $faker->streetAddress,
                    'district' => $faker->lastName,
                    'municipio' => $faker->city,
                    'state' => $faker->state,
                    'zipcode' => $faker->postcode('#####-###'),
                    'tipo' => $faker->randomElement($array = array ('Apartamento','Casa','Sítio','Andar')),
                    'owner' => $faker->name($gender = 'male'|'female')
                ];
            }
});