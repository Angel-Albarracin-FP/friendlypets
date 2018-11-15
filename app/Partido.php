<?php

namespace FriendlyPets;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $table = 'partidos';
    public $timestamps = false;

    public static function partidosByProv($id){
    	return Partido::where('id_provincia', $id)->get();
    }

    public function provincia() {
        return $this->belongsTo(Provincia::class, 'id_provincia');
    }

}
