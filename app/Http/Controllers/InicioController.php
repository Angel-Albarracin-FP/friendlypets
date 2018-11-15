<?php

namespace FriendlyPets\Http\Controllers;

use FriendlyPets\PreguntaFrecuente;
use FriendlyPets\Imagen;
use FriendlyPets\Noticia;
use FriendlyPets\User;
use Illuminate\Http\Request;
use Debugbar;

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
        $noticias = Noticia::all();
        $logo = Imagen::find(1);
        return view('inicio.index', compact('preguntas', 'logo', 'noticias'));
    }
}
