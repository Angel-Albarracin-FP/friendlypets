<?php

use Faker\Generator as Faker;
use FriendlyPets\FuncionesComunes;

$factory->define(FriendlyPets\Localidad::class, function (Faker $faker) {
    return [
        'id_partido' => rand(0, 10),
        'name' => FuncionesComunes::cadenaAleatoria(),
    ];
});
