<?php

namespace FriendlyPets;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    protected $table = 'avisos';

    // Relaciones

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function tipoAviso() {
        return $this->belongsTo(TipoAviso::class, 'id_tipo_aviso');
    }

    public function tipoAnimal() {
        return $this->belongsTo(TipoAnimal::class, 'id_tipo_animal');
    }

    public function imagen() {
        return $this->belongsTo(Imagen::class, 'id_imagen');
    }

    public function localidad() {
        return $this->belongsTo(Localidad::class, 'id_localidad');
    }

    // Alcance de los Query

    public function scopeTipoAviso($query, $idTipoAviso = 0){
        if($idTipoAviso > 0 && $idTipoAviso <= 3 ){
            return $query->where('id_tipo_aviso', $idTipoAviso);
        }
    }

    public function scopeTipoAnimal($query, $idTipoAnimal = 0){
        if($idTipoAnimal > 0 && $idTipoAnimal <= 2 ){
            return $query->where('id_tipo_animal', $idTipoAnimal);
        }
    }

    public function scopeSexo($query, $sexo = ' '){
        if($sexo == 'M' || $sexo == 'H' ){
            return $query->where('sexo', $sexo);
        }
    }

}
