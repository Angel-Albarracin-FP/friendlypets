<?php

use Illuminate\Database\Seeder;

class ImagenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imagenes')->insert([
            [
            	'path' => '/img/',
                'name' => 'Logo.png',
            ],
            [
            	'path' => '/img/avatares/',
                'name' => 'notImage.png',
            ],
            [
                'path' => '/img/noticias/',
                'name' => 'ultimoMomento.jpg',
            ],
        ]);
    }
}
