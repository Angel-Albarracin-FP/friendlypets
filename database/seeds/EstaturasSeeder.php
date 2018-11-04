<?php

use Illuminate\Database\Seeder;

class EstaturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estaturas')->insert([
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
