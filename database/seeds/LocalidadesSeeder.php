<?php

use Illuminate\Database\Seeder;
use FriendlyPets\Localidad;

class LocalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('localidades')->insert([
            [
            	'id_partido' => 1,
            	'name' => 'Florida',
            ],
            [
            	'id_partido' => 1,
            	'name' => 'Munro',
            ],
        ]);

        factory(Localidad::class, 6)->create([
            'id_partido' => 1,
        ]);

    }
}
