<?php

use Illuminate\Database\Seeder;

class ProvinciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincias')->insert([
            [
            	'name' => 'Buenos Aires',
            ],
            [
            	'name' => 'Catamarca',
            ],
        ]);
    }
}
