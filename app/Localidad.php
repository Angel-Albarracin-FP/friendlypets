<?php

namespace FriendlyPets;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = 'localidades';
    public $timestamps = false;

    public static function localidadesByPart($id){
    	return Localidad::where('id_partido', $id)->get();
    }

}
