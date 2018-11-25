<?php

use Illuminate\Database\Seeder;
use FriendlyPets\Localidad;

class LocalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('localidades')->insert([
            [
            	'id_partido' => 2,
            	'name' => 'Florida',
            ],
            [
            	'id_partido' => 2,
            	'name' => 'Munro',
            ],
            [
                'id_provincia' => 1,
                'name' => ' CHACARITA',
            ],
            [
                'id_provincia' => 1,
                'name' => ' PATERNAL',
            ],
            [
                'id_provincia' => 1,
                'name' => ' VILLA CRESPO',
            ],
            [
                'id_provincia' => 1,
                'name' => ' VILLA DEL PARQUE',
            ],
            [
                'id_provincia' => 1,
                'name' => ' ALMAGRO',
            ],
            [
                'id_provincia' => 1,
                'name' => ' CABALLITO',
            ],
            [
                'id_provincia' => 1,
                'name' => ' VILLA SANTA RITA',
            ],
            [
                'id_provincia' => 1,
                'name' => ' MONTE CASTRO',
            ],
            [
                'id_provincia' => 1,
                'name' => ' VILLA REAL',
            ],
            [
                'id_provincia' => 1,
                'name' => ' FLORES',
            ],
            [
                'id_provincia' => 1,
                'name' => ' FLORESTA',
            ],
            [
                'id_provincia' => 1,
                'name' => ' CONSTITUCION',
            ],
            [
                'id_provincia' => 1,
                'name' => ' SAN CRISTOBAL',
            ],
            [
                'id_provincia' => 1,
                'name' => ' BOEDO',
            ],
            [
                'id_provincia' => 1,
                'name' => ' VELEZ SARSFIELD',
            ],
            [
                'id_provincia' => 1,
                'name' => ' VILLA LURO',
            ],
            [
                'id_provincia' => 1,
                'name' => ' PARQUE PATRICIOS',
            ],
            [
                'id_provincia' => 1,
                'name' => ' MATADEROS',
            ],
            [
                'id_provincia' => 1,
                'name' => ' VILLA LUGANO',
            ],
            [
                'id_provincia' => 1,
                'name' => ' SAN TELMO',
            ],
            [
                'id_provincia' => 1,
                'name' => ' SAAVEDRA',
            ],
            [
                'id_provincia' => 1,
                'name' => ' COGHLAN',
            ],
            [
                'id_provincia' => 1,
                'name' => ' VILLA URQUIZA',
            ],
            [
                'id_provincia' => 1,
                'name' => ' COLEGIALES',
            ],
            [
                'id_provincia' => 1,
                'name' => ' BALVANERA',
            ],
            [
                'id_provincia' => 1,
                'name' => ' VILLA GRAL. MITRE',
            ],
            [
                'id_provincia' => 1,
                'name' => ' PARQUE CHAS',
            ],
            [
                'id_provincia' => 1,
                'name' => ' AGRONOMIA',
            ],
            [
                'id_provincia' => 1,
                'name' => ' VILLA ORTUZAR',
            ],
            [
                'id_provincia' => 1,
                'name' => ' BARRACAS',
            ],
            [
                'id_provincia' => 1,
                'name' => ' PARQUE AVELLANEDA',
            ],
            [
                'id_provincia' => 1,
                'name' => ' PARQUE CHACABUCO',
            ],
            [
                'id_provincia' => 1,
                'name' => ' NUEVA POMPEYA',
            ],
            [
                'id_provincia' => 1,
                'name' => ' PALERMO',
            ],
            [
                'id_provincia' => 1,
                'name' => ' VILLA RIACHUELO',
            ],
            [
                'id_provincia' => 1,
                'name' => ' VILLA SOLDATI',
            ],
            [
                'id_provincia' => 1,
                'name' => ' VILLA PUEYRREDON',
            ],
            [
                'id_provincia' => 1,
                'name' => ' VILLA DEVOTO',
            ],
            [
                'id_provincia' => 1,
                'name' => ' LINIERS',
            ],
            [
               'id_provincia' => 1,
               'name' => ' VERSALLES',
           ],
           [
               'id_provincia' => 1,
               'name' => ' PUERTO MADERO',
           ],
           [
               'id_provincia' => 1,
               'name' => ' MONSERRAT',
           ],
           [
               'id_provincia' => 1,
               'name' => ' SAN NICOLAS',
           ],
           [
               'id_provincia' => 1,
               'name' => ' BELGRANO',
           ],
           [
               'id_provincia' => 1,
               'name' => ' RECOLETA',
           ],
           [
               'id_provincia' => 1,
               'name' => ' RETIRO',
           ],
           [
               'id_provincia' => 1,
               'name' => ' NUÑEZ',
           ],
           [
            'id_provincia' => 1,
            'name' => ' BOCA',
           ],
        
        ]);

        factory(Localidad::class, 6)->create([
            'id_partido' => 2,
        ]);

    }
}
