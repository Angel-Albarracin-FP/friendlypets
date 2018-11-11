<?php

use Faker\Generator as Faker;
use FriendlyPets\FuncionesComunes;

$factory->define(FriendlyPets\Noticia::class, function (Faker $faker) {
    return [
        'titulo' => FuncionesComunes::cadenaAleatoria(),
        'descripcion' => $faker->text(),
    ];
});
