@extends('layouts.app')

@section('content')

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>¿Quienes somos?</h2>
      <h3>FriendlyPets</h3>
      <div class="fakeimg">
        <img class="img-fluid bg-primary" src="{{ asset('img/Logo.png') }}" alt="FriendlyPets">
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
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

@endsection
