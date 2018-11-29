<?php

namespace FriendlyPets;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Caffeinated\Shinobi\Traits\ShinobiTrait;

class User extends Authenticatable
{
    use Notifiable, ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function imagen() {
        return $this->belongsTo(Imagen::class, 'id_imagen');
    }

    public function localidad() {
        return $this->belongsTo(Localidad::class, 'id_localidad');
    }

    public function voluntario(){
        return $this->belongsTo(Voluntario::class, 'id');
    }

    public function avisos()
    {
        return $this->hasMany(Aviso::class, 'id_user');
    }

    public function noticias()
    {
        return $this->hasMany(Noticia::class, 'id_user');
    }
    
}
