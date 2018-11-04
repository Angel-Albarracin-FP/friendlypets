<?php

namespace FriendlyPets\Http\Controllers;

use FriendlyPets\PreguntaFrecuente;
use FriendlyPets\Imagen;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$preguntas = PreguntaFrecuente::all();
        $logo = Imagen::find(1);
        return view('inicio.index', compact('preguntas', 'logo'));
    }
}
