<?php

use Illuminate\Database\Seeder;

class VoluntariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('voluntarios')->insert([
            [
              'id' => '1',
              'hogar' => true,
              'rescatista' => true,
              'difundidor' => true,
            ],
            [
              'id' => '2',
              'hogar' => false,
              'rescatista' => true,
              'difundidor' => true,
            ],
            [
              'id' => '3',
              'hogar' => true,
              'rescatista' => true,
              'difundidor' => false,
            ],
            [
              'id' => '4',
              'hogar' => true,
              'rescatista' => false,
              'difundidor' => true,
            ],
        ]);
    }
}
