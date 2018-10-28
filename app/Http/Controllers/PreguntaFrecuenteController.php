<?php

namespace FriendlyPets\Http\Controllers;

use FriendlyPets\PreguntaFrecuente;
use Illuminate\Http\Request;

class PreguntaFrecuenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntasFrecuentes = \DB::table('preguntas_frecuentes')->select('pregunta', 'respuesta')->get();
        return $preguntasFrecuentes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \FriendlyPets\PreguntaFrecuente  $preguntaFrecuente
     * @return \Illuminate\Http\Response
     */
    public function show(PreguntaFrecuente $preguntaFrecuente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \FriendlyPets\PreguntaFrecuente  $preguntaFrecuente
     * @return \Illuminate\Http\Response
     */
    public function edit(PreguntaFrecuente $preguntaFrecuente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \FriendlyPets\PreguntaFrecuente  $preguntaFrecuente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PreguntaFrecuente $preguntaFrecuente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \FriendlyPets\PreguntaFrecuente  $preguntaFrecuente
     * @return \Illuminate\Http\Response
     */
    public function destroy(PreguntaFrecuente $preguntaFrecuente)
    {
        //
    }
}
