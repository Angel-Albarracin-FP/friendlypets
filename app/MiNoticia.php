<?php

namespace FriendlyPets;

class MiNoticia
{
    public $titulo;
    public $descripcion;
    public $fecha;
    public $autor;
    public $imagen;

    function __construct($titulo, $descripcion, $fecha, $autor, $imagen){
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->fecha = $fecha;
        $this->autor = $autor;
        $this->imagen = $imagen;
    } 

}