<?php

namespace FriendlyPets;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias';

    public function user() {
    	return $this->belongsTo(User::class, 'id_user');
	}

    public function imagen() {
    	return $this->belongsTo(Imagen::class, 'id_imagen');
	}

}
