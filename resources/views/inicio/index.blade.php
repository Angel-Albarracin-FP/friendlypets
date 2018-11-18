@extends('layouts.app')

@section('content')

<div>
  <div class="row">
    <div class="col-sm-4">
      <h2>¿Quienes somos?</h2>
      <h3>FriendlyPets</h3>
      <div class="fakeimg">
        <img class="img-responsive bg-primary" src="{{ $logo->path }}{{ $logo->name }}" alt="FriendlyPets">
      </div>
      <p>
        Somos un grupo de personas interesadas en ayudar a nustros amigos de 4 patas. <br>
        Nuestra principal meta es reducir la cantidad de animales en la calle y mejorar la 
        educacion sobre las mascotas, esperamos brindar herrmaientas que ayuden a las personas 
        con el cuidadod de ellas
      </p>
      <h3>Preguntas frecuentes</h3>
      @foreach ($preguntas as $pregunta)
        <h5>{{ $pregunta->pregunta }}</h5>
        <p>{{ $pregunta->respuesta }}</p>
      @endforeach
    </div>
    @include('noticia.index')
  </div>
</div>

@endsection