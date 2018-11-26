<?php

namespace FriendlyPets\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use FriendlyPets\Imagen;
use FriendlyPets\Voluntario;
use FriendlyPets\User;
use FriendlyPets\Provincia;
use Image;
use Auth;
use Debugbar;
use FriendlyPets\FuncionesComunes;
use Barryvdh\Debugbar\Twig\Extension\Debug;

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
        //
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
    public function show()
    {
        $user = User::find(Auth::user()->id);
        $avisos = $user->avisos;
        if($user->id_imagen == null){
            $user->id_imagen = 2;
        }
        return view('perfil.index', compact('user', 'avisos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $provincias = Provincia::all();
        return view('perfil.edit', compact('provincias'));
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
      $request->validate([
        'file' => 'required',
        'name' => 'required',
        'email' => 'required',
        'localidad' => 'required',
      ]);
      $user = User::find(Auth::user()->id);
      $this->actualizaVoluntario($request, $user->id);
      $imagenDB = Imagen::make();
      $imagenName = FuncionesComunes::guardarImagen('img/avatares/', $request->file('file'));
      //Tomo la imagen de la DB para tomar su id
      $imagenDB = Imagen::where('name', $imagenName)->get();
      // Actualizo al user
      foreach ($imagenDB as $imgDB) {
        $user->id_imagen = $imgDB->id;
      }
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->id_localidad = $request->input('localidad');
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

    private function actualizaVoluntario(Request $request, $id){
      $voluntario = Voluntario::find($id);
      if($request->input('voluntario') == 'on'){
        if(!$voluntario){
          $voluntario = Voluntario::make();
          $voluntario->id = $id;
        }
        $voluntario->hogar = ($request->input('hogar') == 'on' ? true : false);
        $voluntario->rescatista = ($request->input('rescatista') == 'on' ? true : false);
        $voluntario->difundidor = ($request->input('difundidor') == 'on' ? true : false);
        $voluntario->save();
      }
      if($voluntario && $request->input('voluntario') == null){
        Voluntario::destroy($id);
      }
    }

}
