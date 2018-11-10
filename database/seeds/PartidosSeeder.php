<?php

use Illuminate\Database\Seeder;
use FriendlyPets\Partido;

class PartidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partidos')->insert([
            [
            	'id_provincia' => 1,
            	'name' => 'Vicente López',
            ],
            [
            	'id_provincia' => 1,
            	'name' => 'Azul',
            ],
        ]);

        factory(Partido::class, 48)->create([
            'id_provincia' => 1,
        ]);
    }
}
