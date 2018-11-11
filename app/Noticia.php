<?php

namespace FriendlyPets;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias';

    public function user() {
        return $this->hasOne('FriendlyPets\User');
    }

    public function imagen() {
        return $this->hasOne('FriendlyPets\Imagen');
    }

}
