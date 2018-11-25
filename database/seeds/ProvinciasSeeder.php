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
        // Inserta las 23 provincias y Ciudad Autonoma de Bs.As
        DB::table('provincias')->insert([
            [
            	'name' => 'Buenos Aires',
            ],
            [
            	'name' => 'Catamarca',
            ],
            [
                'name' => 'Misiones',
            ],
            [
                'name' => 'San Luis',
            ],
            [
                'name' => 'San Juan',
            ],
            [
                'name' => 'Entre Ríos',
            ],
            [
                'name' => 'Santa Cruz',
            ],
            [
                'name' => 'Río Negro',
            ],
            [
                'name' => 'Chubut',
            ],
            [
                'name' => 'Córdoba',
            ],
            [
                'name' => 'Mendoza',
            ],
            [
                'name' => 'La Rioja',
            ],
            [
                'name' => 'La Pampa',
            ],
            [
                'name' => 'Santiago del Estero',
            ],
            [
                'name' => 'Corrientes',
            ],
            [
                'name' => 'Santa Fe',
            ],
            [
                'name' => 'Tucumán',
            ],
            [
                'name' => 'Jujuy',
            ],
            [
                'name' => 'Salta',
            ],
            [
                'name' => 'Formosa',
            ],
            [
                'name' => 'Chaco',
            ],
            [
                'name' => 'Neuquén',
            ],
            [
                'name' => 'Tierra del Fuego',
            ],
        ]);
    }
}
