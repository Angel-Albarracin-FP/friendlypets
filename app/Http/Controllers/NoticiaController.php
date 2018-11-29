<?php

namespace FriendlyPets\Http\Controllers;

use Illuminate\Http\Request;
use FriendlyPets\Noticia;
use FriendlyPets\FuncionesComunes;
use FriendlyPets\Imagen;
use Auth;
use Illuminate\Support\Facades\Storage;

class NoticiaController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('noticia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validar($request);
        // Guardando datos en el modelo Imagen
        $imagenName = FuncionesComunes::guardarImagen('img/noticias/', $request->file('imagen'));
        $imagenDB = Imagen::make();
        $imagenDB = Imagen::where('name', $imagenName)->get();
        // Guardando datos en el modelo Aviso
        $notica = Noticia::make();
        foreach ($imagenDB as $imgDB) {
           $notica->id_imagen = $imgDB->id;
        }
        $notica->id_user = Auth::user()->id;
        $notica->descripcion = $request->input('descripcion');
        $notica->titulo = $request->input('titulo');
        $notica->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticia::find($id);
        return view('noticia.show', compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticia = Noticia::find($id);
        return view('noticia.edit', compact('noticia'));
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
        $this->validar($request);
        // Guardando datos en el modelo Imagen
        $imagenName = FuncionesComunes::guardarImagen('img/noticias/', $request->file('imagen'));
        $imagenDB = Imagen::make();
        $imagenDB = Imagen::where('name', $imagenName)->get();
        // Guardando datos en el modelo Aviso
        $noticia = Noticia::find($id);
        foreach ($imagenDB as $imgDB) {
           $noticia->id_imagen = $imgDB->id;
        }
        $noticia->descripcion = $request->input('descripcion');
        $noticia->titulo = $request->input('titulo');
        $noticia->save();
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
        $noticia = Noticia::find($id);
        Storage::delete( (public_path() . '/' . $noticia->imagen->path . $noticia->imagen->name) );
        $idImg = $noticia->id_imagen;
        $noticia->delete();
        Imagen::destroy($idImg);
        return redirect('/perfil');
    }

    private function validar(Request $request)
    {
        $request->validate([
            'imagen' => 'required',
            'descripcion' => 'required|max:255',
            'titulo' => 'required|max:100',
        ]);
    }

}
