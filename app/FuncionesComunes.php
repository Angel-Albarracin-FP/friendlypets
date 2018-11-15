<?php

namespace FriendlyPets;

use FriendlyPets\Imagen;
use Image;

class FuncionesComunes
{
    public static function cadenaAleatoria() {
    	$key = '';
    	$keys = array_merge( range('a','z'), range(0,9) );
    	for($i=0; $i<10; $i++) {
        	$key .= $keys[array_rand($keys)];
    	}
    	return $key;
    }


    /*
    *	Guarda una imagen en la ruta deseada, con un nombre aleatorio	
    *
    *	@param $ruta ruta relativa a la carpeta public del proyecto
    *	@param $imagen imagen que se desea guardar
    *	@return Devuelve el nombre con el que se guarda el archivo
    */
    public static function guardarImagen($ruta, $imagen){
    	//Guarda imagen en el proyecto
        $rutaProyecto = public_path() . '/' . $ruta;
        $imagenProyecto = Image::make($imagen);
        $temp_name = FuncionesComunes::cadenaAleatoria() . '.' . $imagen->getClientOriginalExtension();
        $imagenProyecto->save($rutaProyecto . $temp_name, 100);
        // Guarda imagen en la base de datos
        $imagenDB = new Imagen;
        $imagenDB->path = $ruta;
        $imagenDB->name = $temp_name;
        $imagenDB->save();
        return $temp_name;
    }

}
