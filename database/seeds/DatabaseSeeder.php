<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	ProvinciasSeeder::class,
        	PartidosSeeder::class,
            LocalidadesSeeder::class,
            PermisosSeeder::class,
            RolesSeeder::class,
            PreguntasFrecuentesSeeder::class,
            ImagenesSeeder::class,
            TiposAnimalSeeder::class,
            TipoAvisoSeeder::class, 
            EstaturasSeeder::class,
            UsersSeeder::class,
            NoticiasSeeder::class,
            AvisosSeeder::class,
            VoluntariosSeeder::class,
        ]);
    }
}
