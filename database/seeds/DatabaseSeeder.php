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
            PreguntasFrecuentesSeeder::class,
            ImagenesSeeder::class,
            TiposAnimalSeeder::class,
            EstaturasSeeder::class,
        ]);
    }
}
