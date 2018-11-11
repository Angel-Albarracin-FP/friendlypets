<?php

namespace FriendlyPets\Http\Controllers;

use FriendlyPets\PreguntaFrecuente;
use FriendlyPets\Imagen;
use FriendlyPets\Noticia;
use FriendlyPets\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use FriendlyPets\MiNoticia;
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
        $noticias = Collection::make();
    	$preguntas = PreguntaFrecuente::all();
        $noticiasDB = Noticia::all();
        $i = 0;
        Debugbar::info($noticiasDB);
        foreach ($noticiasDB as $noticia) {
            $user = User::find($noticia->id_user);
            $imagen = Imagen::find($noticia->id_imagen);
            array_add($noticias, $i, new MiNoticia($noticia->titulo,
                                                    $noticia->descripcion,
                                                $noticia->created_at,
                                                $user->name,
                                                ($imagen->path . $imagen->name)
                                            ));
            $i++;
        }
        $logo = Imagen::find(1);
        Debugbar::info($noticias);
        return view('inicio.index', compact('preguntas', 'logo', 'noticias'));
    }
}
