<?php

namespace FriendlyPets\Http\Controllers;

use Illuminate\Http\Request;
use FriendlyPets\Provincia;
use FriendlyPets\TipoAnimal;
use FriendlyPets\TipoAviso;
use FriendlyPets\Aviso;
use FriendlyPets\FuncionesComunes;
use FriendlyPets\Imagen;
use Debugbar;
use Auth;

class AvisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Debugbar::info($request->all());
        $filtros = $request->all();
        Debugbar::info($filtros);
        $tipoAnimal = TipoAnimal::all();
        $tipoAviso = TipoAviso::all();
        $provincias = Provincia::all();
        $avisos = Aviso::orderBy('created_at')
            ->TipoAviso($request->input('aviso'))
            ->TipoAnimal($request->input('animal'))
            ->paginate(5);
        return view('aviso.index', compact('tipoAnimal', 'tipoAviso', 'provincias', 'avisos', 'filtros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoAnimal = TipoAnimal::all();
        $tipoAviso = TipoAviso::all();
        $provincias = Provincia::all();
        return view('aviso.create', compact('tipoAnimal', 'tipoAviso', 'provincias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagenName = FuncionesComunes::guardarImagen('img/avisos/', $request->file('file'));
        $imagenDB = Imagen::make();
        $imagenDB = Imagen::where('name', $imagenName)->get();
        $aviso = Aviso::make();
        foreach ($imagenDB as $imgDB) {
           $aviso->id_imagen = $imgDB->id;
        }
        Debugbar::info($request->all());
        
        Debugbar::info( $aviso );
        $aviso->id_user = Auth::user()->id;
        $aviso->descripcion = $request->input('descripcion');
        $aviso->id_localidad = $request->input('localidad');
        $aviso->id_tipo_animal = $request->input('animal');
        $aviso->id_tipo_aviso = $request->input('aviso');
        $aviso->sexo = 'M';
        $aviso->save();
        return redirect('/avisos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
