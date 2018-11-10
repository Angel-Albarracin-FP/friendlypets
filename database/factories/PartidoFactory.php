<?php

use Faker\Generator as Faker;
use FriendlyPets\FuncionesComunes;

$factory->define(FriendlyPets\Partido::class, function (Faker $faker) {
    return [
        'id_provincia' => rand(0, 24),
        'name' => FuncionesComunes::cadenaAleatoria(),
    ];
});
