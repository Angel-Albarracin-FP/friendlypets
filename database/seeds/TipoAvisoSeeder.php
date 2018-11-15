<?php

use Illuminate\Database\Seeder;

class TipoAvisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_aviso')->insert([
            [
            	'tipo' => 'Perdido',
            ],
            [
            	'tipo' => 'Encontrado',
            ],
            [
            	'tipo' => 'Adopcion',
            ],
        ]);
    }
}
