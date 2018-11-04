<?php

use Illuminate\Database\Seeder;

class TiposAnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_animal')->insert([
            [
            	'tipo' => 'Perro',
            ],
            [
            	'tipo' => 'Gato',
            ],
        ]);
    }
}
