<?php

namespace FriendlyPets\Http\Controllers;

use Illuminate\Http\Request;
use FriendlyPets\Voluntario;

class VoluntarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voluntarios = Voluntario::all();
        return view('voluntario.index', compact('voluntarios'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $voluntario = Voluntario::find($id);
        return view('voluntario.show', compact('voluntario'));
    }

}
