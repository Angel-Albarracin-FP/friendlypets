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
      ],
    ]);

    DB::table('roles')->insert([
      'name' => 'Owner',
      'slug' => 'Owner',
      'description' => 'Dueño del sitio',
      'special' => 'all-access',
    ]);

    DB::table('permission_role')->insert([
      [
        'permission_id' => '1',
        'role_id' => '1',
      ],
      [
        'permission_id' => '2',
        'role_id' => '1',
      ],
      [
        'permission_id' => '5',
        'role_id' => '2',
      ],
      [
        'permission_id' => '6',
        'role_id' => '2',
      ],
      [
        'permission_id' => '1',
        'role_id' => '3',
      ],
      [
        'permission_id' => '2',
        'role_id' => '3',
      ],
      [
        'permission_id' => '3',
        'role_id' => '3',
      ],
      [
        'permission_id' => '4',
        'role_id' => '3',
      ],
      [
        'permission_id' => '1',
        'role_id' => '4',
      ],
      [
        'permission_id' => '2',
        'role_id' => '4',
      ],
      [
        'permission_id' => '4',
        'role_id' => '4',
      ],
      [
        'permission_id' => '7',
        'role_id' => '4',
      ],
      [
        'permission_id' => '8',
        'role_id' => '4',
      ],
    ]);
  }
}
