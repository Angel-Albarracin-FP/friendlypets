@extends('layouts.app')

@section('content')

<div>
  <div class="row">
    <div class="col-md-6 img">
      <h4>{{ $user->name }}</h4>
      <img src="{{ $user->imagen->path }}{{ $user->imagen->name }}"  alt="" class="img-rounded img-responsive">
    </div>
    <div class="col-md-6 details">
      <blockquote>
        Zona: 
        @if ($user->localidad != null) 
        <cite title="Source Title">{{ $user->localidad->partido->provincia->name}}, {{ $user->localidad->partido->name }}, {{ $user->localidad->name }}</cite>
        @endif
      </blockquote>
      <p>
        Mail: {{ $user->email }}
      </p>
      <p>
        @if ( $user->voluntario )
          Eres voluntario como: 
          @if ( $user->voluntario->hogar )
            hogar, 
          @endif
          @if ( $user->voluntario->rescatista )
            rescatista, 
          @endif
          @if ( $user->voluntario->difundidor )
            difundidor 
          @endif
        @else 
          No eres Voluntario? Animate a serlo :D
        @endif
      </p>
      <button type="submit" onclick="location.href='/perfil/edit'" class="btn btn-primary">Editar</button>
    </div>
  </div>

  {{-- En esta seccion iran los avisos pertenecientes al usuario --}}
  <div class="col-sm-12" style="margin-top:20px">
    @forelse( $avisos as $aviso)
      @include('componente.ficha')
    @empty

    @endforelse
  </div>

</div>

@endsection