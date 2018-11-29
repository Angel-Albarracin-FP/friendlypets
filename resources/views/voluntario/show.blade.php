@extends('layouts.app')

@section('content')

<div>
    <div class="row bg-ficha">
      <div class="one_quarter first"> 
        <img src="/{{ $voluntario->user->imagen->path }}{{ $voluntario->user->imagen->name }}" style="width:100%;" class="img-responsive">
      </div>
      <div class="three_quarter">
        <h6 class="title-divider">
          <span style="color:#de61d9">
            @if ($voluntario->user->localidad != null)
              {{ $voluntario->user->localidad->partido->provincia->name }}, 
              {{ $voluntario->user->localidad->partido->name }}, 
              {{  $voluntario->user->localidad->name }}
            @endif
          </span>
        </h6>
        <p>{{ $voluntario->user->name }}</p>
        <p>
          Es voluntario como: 
          @if ( $voluntario->hogar )
            hogar, 
          @endif
          @if ( $voluntario->rescatista )
            rescatista, 
          @endif
          @if ( $voluntario->difundidor )
            difundidor 
          @endif
        </p>
        <p>
          Escribele un mail a: <br>
          {{ $voluntario->user->email }}
        </p>
      </div>
    </div>
  </div>

@endsection