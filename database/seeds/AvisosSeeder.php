<?php

use Illuminate\Database\Seeder;

class AvisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avisos')->insert([
            [
            	'estatura' => 'Pequeño',
            ],
            [
            	'estatura' => 'Mediano',
            ],
            [
            	'estatura' => 'Grande',
            ],
        ]);

    }
}
