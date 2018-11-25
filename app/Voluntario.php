<?php

namespace FriendlyPets;

use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    protected $table = 'voluntarios';
    public $incrementing = false;
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class, 'id');
    }

}
