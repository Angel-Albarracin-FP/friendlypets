<?php

use Faker\Generator as Faker;

$factory->define(FriendlyPets\Aviso::class, function (Faker $faker) {
    return [
        'descripcion' => $faker->text(),
    ];
});
