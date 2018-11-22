<?php

namespace FriendlyPets\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $tipoAvisoId = 0;
        $tipoAnimalId = 0;
        $sexo = 'Z';
        $tipoAvisoId = $request->input('aviso');
        $tipoAnimalId = $request->input('animal');
        $sexo = $request->input('sexo');
        $tipoAnimal = TipoAnimal::all();
        $tipoAviso = TipoAviso::all();
        $provincias = Provincia::all();
        $avisos = Aviso::orderBy('created_at')
            ->TipoAviso($tipoAvisoId)
            ->TipoAnimal($tipoAnimalId)
            ->sexo($sexo)
            ->paginate(5);
        return view('aviso.index', compact('tipoAnimal', 'tipoAviso', 'provincias', 'avisos', 'tipoAvisoId', 'tipoAnimalId', 'sexo'));
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

        $request->validate([
            'file' => 'required',
            'descripcion' => 'required|max:255',
            'localidad' => 'required',
            'aviso' => 'required',
            'animal' => 'required',
            'sexo' => 'required',
        ]);

        // Guardando datos en el modelo Imagen
        $imagenName = FuncionesComunes::guardarImagen('img/avisos/', $request->file('file'));
        $imagenDB = Imagen::make();
        $imagenDB = Imagen::where('name', $imagenName)->get();
        // Guardando datos en el modelo Aviso
        $aviso = Aviso::make();
        foreach ($imagenDB as $imgDB) {
           $aviso->id_imagen = $imgDB->id;
        }
        $aviso->id_user = Auth::user()->id;
        $aviso->descripcion = $request->input('descripcion');
        $aviso->id_localidad = $request->input('localidad');
        $aviso->id_tipo_animal = $request->input('animal');
        $aviso->id_tipo_aviso = $request->input('aviso');
        $aviso->sexo = $request->input('sexo');
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
        $aviso = Aviso::find($id);
        return view('aviso.show', compact('aviso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aviso = Aviso::find($id);
        $tipoAnimal = TipoAnimal::all();
        $tipoAviso = TipoAviso::all();
        $provincias = Provincia::all();
        return view('aviso.edit', compact('aviso', 'tipoAnimal', 'tipoAviso', 'provincias'));
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

        $request->validate([
            'file' => 'required',
            'descripcion' => 'required|max:255',
            'localidad' => 'required',
            'aviso' => 'required',
            'animal' => 'required',
            'sexo' => 'required',
        ]);
        
        $aviso = Aviso::find($id);
        // Guardando datos en el modelo Imagen
        $imagenName = FuncionesComunes::guardarImagen('img/avisos/', $request->file('file'));
        $imagenDB = Imagen::make();
        $imagenDB = Imagen::where('name', $imagenName)->get();
        // Guardando datos en el modelo Aviso
        foreach ($imagenDB as $imgDB) {
           $aviso->id_imagen = $imgDB->id;
        }
        $aviso->descripcion = $request->input('descripcion');
        $aviso->id_localidad = $request->input('localidad');
        $aviso->id_tipo_animal = $request->input('animal');
        $aviso->id_tipo_aviso = $request->input('aviso');
        $aviso->sexo = $request->input('sexo');
        $aviso->save();
        return redirect('/perfil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aviso = Aviso::find($id);
        Storage::delete( (public_path() . '/' . $aviso->imagen->path . $aviso->imagen->name) );
        $idImg = $aviso->id_imagen;
        $aviso->delete();
        Imagen::destroy($idImg);
        return redirect('/perfil');

    }
}
