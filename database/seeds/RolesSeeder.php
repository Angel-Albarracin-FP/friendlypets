<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert([
        [
          'name' => 'FP',
          'slug' => 'FP',
          'description' => 'Usuario comun',
        ],
        [
          'name' => 'FPP',
          'slug' => 'FPP',
          'description' => 'Refugios de mascotas, asociaciones protectortas, etc',
        ],
        [
          'name' => 'Noticiero',
          'slug' => 'Noticiero',
          'description' => 'Creador de noticias',
        ],
        [
          'name' => 'Admin',
          'slug' => 'Admin',
          'description' => 'Administrador del sitio',
        ]
      ]);
    }
}
