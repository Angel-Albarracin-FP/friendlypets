<?php

namespace FriendlyPets\Http\Controllers;

use FriendlyPets\Imagen;
use Illuminate\Http\Request;
use Image;
use Debugbar;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imagen.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ruta de las imagenes guardadas
        $ruta = public_path().'/img/';

        // recogida del form
        $imagenOriginal = $request->file('file');

        // crear instancia de imagen
        $imagen = Image::make($imagenOriginal);
 
        // generar un nombre aleatorio para la imagen
        $temp_name = $this->random_string() . '.' . $imagenOriginal->getClientOriginalExtension();
 
        // guardar imagen
        // save( [ruta], [calidad])
        $imagen->save($ruta . $temp_name, 100);
        
        $imagenDB = new Imagen;
        $imagenDB->path = '/img/';
        $imagenDB->name = $temp_name;
        $imagenDB->save();


        return redirect('/imagenes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \FriendlyPets\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function show(Imagen $imagen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \FriendlyPets\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function edit(Imagen $imagen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \FriendlyPets\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imagen $imagen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \FriendlyPets\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imagen $imagen)
    {
        //
    }

    protected function random_string()
    {
    $key = '';
    $keys = array_merge( range('a','z'), range(0,9) );
 
    for($i=0; $i<10; $i++)
    {
        $key .= $keys[array_rand($keys)];
    }
 
    return $key;
    }

}
