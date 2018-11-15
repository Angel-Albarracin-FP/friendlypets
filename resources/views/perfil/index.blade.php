@extends('layouts.app')

@section('content')

<div class="container" style="margin-top:20px">
  <div class="row">
    <div class="col-md-6 img">
      <h4>{{ $user->name }}</h4>
      <img src="{{ $user->imagen->path }}{{ $user->imagen->name }}"  alt="" class="img-rounded img-fluid">
    </div>
    <div class="col-md-6 details">
      <blockquote>
        <label>Zona:</label>
        @if ($user->localidad != null) 
        <cite title="Source Title">{{ $user->localidad->partido->provincia->name}}, {{ $user->localidad->partido->name }}, {{ $user->localidad->name }}</cite>
        @endif
      </blockquote>
      <p>
        <label>Mail:</label> {{ $user->email }}
      </p>
      <form method="POST" action="{{ action('UserController@edit') }}">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">Editar</button>
      </form>
    </div>
  </div>

  {{-- En esta seccion iran los avisos pertenecientes al usuario --}}
  <div class="col-sm-8">
      {{--
        @foreach ($avisos as $aviso)
          <h2>{{ $aviso->titulo }}</h2>
          <div class="fakeimg">
            <img class="img-fluid" src="{{ ?? }}" alt="img">
          </div>
          <p>{{ $aviso->descripcion }}</p>
        <br>
        @endforeach
      --}}
  </div>

</div>

@endsection