<?php

namespace FriendlyPets\Http\Controllers;

use Illuminate\Http\Request;
use FriendlyPets\Imagen;
use FriendlyPets\User;
use Image;
use Auth;
use Debugbar;
use FriendlyPets\FuncionesComunes;

class UserController extends Controller
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
        $user = User::find(Auth::user()->id);
        $avatar = Imagen::find($user->id_imagen);
        return view('perfil.index', compact('user', 'avatar'));
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
    public function edit()
    {
        return view('perfil.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $imagenDB = new Imagen;
        $imagenName = FuncionesComunes::guardarImagen('/img/avatares/', $request->file('file'));
        //Tomo la imagen de la DB para tomar su id
        $imagenDB = Imagen::where('name', $imagenName)->get();
        // Actualizo al user
        foreach ($imagenDB as $imgDB) {
            $user->id_imagen = $imgDB->id;
        }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

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
        //
    }

}
