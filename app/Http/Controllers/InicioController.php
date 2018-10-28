<?php

namespace FriendlyPets\Http\Controllers;

use FriendlyPets\PreguntaFrecuente;
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
        return view('inicio.welcome', compact('preguntas'));
    }
}
