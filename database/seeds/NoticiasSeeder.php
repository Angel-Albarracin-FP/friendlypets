<?php

use Illuminate\Database\Seeder;
use FriendlyPets\Noticia;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Noticia::class, 3)->create([
            'id_user' => 1,
            'id_imagen' => 3,
        ]);
        factory(Noticia::class, 2)->create([
            'id_user' => 2,
            'id_imagen' => 3,
        ]);

    }
}
