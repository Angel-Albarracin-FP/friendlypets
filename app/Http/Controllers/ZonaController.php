<?php

namespace FriendlyPets\Http\Controllers;

use Illuminate\Http\Request;
use FriendlyPets\Provincia;
use FriendlyPets\Localidad;
use FriendlyPets\Partido;

class ZonaController extends Controller
{
    public function getPartidos(Request $request, $id){
    	if($request->ajax() ){
    		$partidos = Partido::partidosByProv($id);
    		return response($partidos);
    	}
    }

    public function getLocalidades(Request $request, $id){
    	if($request->ajax() ){
    		$localidades = Localidad::localidadesByPart($id);
    		return response($localidades);
    	}
    }

}
