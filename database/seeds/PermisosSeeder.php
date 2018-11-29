<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
use Symfony\Component\Console\Helper\Table;

class PermisosSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('permissions')->insert([
      [
        'name' => 'Creacion de avisos',
        'slug' => 'aviso.create',
        'description' => 'Acceso al formulario de creacion de avisos',
      ],
      [
        'name' => 'Edicion de avisos',
        'slug' => 'aviso.edit',
        'description' => 'Acceso al formulario de edicion de avisos',
      ],
      [
        'name' => 'Creacion de noticias',
        'slug' => 'notica.create',
        'description' => 'Acceso al formulario de creacion de noticias',
      ],
      [
        'name' => 'Edicion de noticias',
        'slug' => 'noticia.edit',
        'description' => 'Acceso al formulario de edicion de noticias',
      ],
      [
        'name' => 'Listado de voluntarios',
        'slug' => 'voluntario.index',
        'description' => 'Lista todos los voluntarios actualmente registrados',
      ],
      [
        'name' => 'Datos de voluntaio',
        'slug' => 'voluntario.show',
        'description' => 'Muestra los datos completos del voluntario',
      ],
      [
        'name' => 'Listado de usuarios',
        'slug' => 'user.index',
        'description' => 'Permite la asignacion de roles a los diferentes usuarios',
      ],
      [
        'name' => 'Edicion de roles de usuario',
        'slug' => 'role.edit',
        'description' => 'Permite editar los roles que tiene un usuario',
      ]
    ]);
  }
}
