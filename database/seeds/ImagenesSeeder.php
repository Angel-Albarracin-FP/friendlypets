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
            	'path' => 'img/',
                'name' => 'Logo.png',
            ],
            [
            	'path' => 'img/avatares/',
                'name' => 'notImage.png',
            ],
            [
                'path' => 'img/noticias/',
                'name' => 'ultimoMomento.jpg',
            ],
            [
                'path' => 'img/avisos/',
                'name' => 'perdido.jpg',
            ],
            [
                'path' => 'img/avisos/',
                'name' => 'adopcion.jpg',
            ],
            [
                'path' => 'img/avisos/',
                'name' => 'encontrado.jpg',
            ],
            [
                'path' => 'img/avisos/',
                'name' => 'gato-en-adopcion.jpg',
            ],
            [
                'path' => 'img/avisos/',
                'name' => 'gato-perdido.jpg',
            ],
        ]);
    }
}
