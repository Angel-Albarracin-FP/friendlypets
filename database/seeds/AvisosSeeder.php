<?php

use Illuminate\Database\Seeder;
use FriendlyPets\Aviso;

class AvisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Aviso::class, 3)->create([
            'id_user' => 1,
            'id_localidad' => 1,
            'id_tipo_animal' => 1,
            'id_tipo_aviso' => 1,
            'id_imagen' => 4,
            'sexo' => 'M'
        ]);

        factory(Aviso::class, 3)->create([
            'id_user' => 3,
            'id_localidad' => 2,
            'id_tipo_animal' => 2,
            'id_tipo_aviso' => 2,
            'id_imagen' => 6,
            'sexo' => 'F'
        ]);

        factory(Aviso::class, 3)->create([
            'id_user' => 2,
            'id_localidad' => 5,
            'id_tipo_animal' => 1,
            'id_tipo_aviso' => 3,
            'id_imagen' => 5,
            'sexo' => 'F'
        ]);

    }
}
