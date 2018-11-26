<?php

use Illuminate\Database\Seeder;

class PreguntasFrecuentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preguntas_frecuentes')->insert([
            [
            	'pregunta' => 'Encontre un perro/gato pero no puedo tenerlo ¿Que deberia hacer?',
            	'respuesta' => 'Primero puedes revisar en nuestro avisos de perdidos para asegurarte de que no tiene un dueño, 
            					en caso de no haber ninguno puedes publicarlo en nuestros avisos de encontrados por si el dueño entra a revisar 
            					nuestros anuncios por ultimo puedes ponerte en contacto con algun refugio o asociacion pretectora para que te 
            					ayuden a ubicarle un hogar transitorio mientras buscan a su dueño o un adoptante.',
            ],
        ]);
    }
}
