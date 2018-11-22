@extends('layouts.app')

@section('recursos')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="{{ asset('js/dropDown.js') }}"></script>
  
@endsection

@section('content')
<div>
  <div class="row bg-ficha">
	  <div class="one_quarter first"> 
	    <img src="/{{ $aviso->imagen->path }}{{ $aviso->imagen->name }}" style="width:100%;" class="img-responsive">
	  </div>
	  <div class="three_quarter">
	    <h5 style="text-align:center; color:#fff;" class="bg-principal">
	    {{ $aviso->tipoAnimal->tipo }} {{ $aviso->tipoAviso->tipo }}, contacta a {{ $aviso->user->name }}
	  </h5>
	  <h6 class="title-divider"><span style="color:#de61d9">
	    {{ $aviso->localidad->partido->provincia->name }}, {{ $aviso->localidad->partido->name }}, {{  $aviso->localidad->name }}
	  </span></h6>
	  <h6 style="height:70px;overflow:hidden;">{{ $aviso->descripcion }}</h6> 
	    @if( $aviso->id_user == Auth::id())
	    <div class="row align-items-center justify-content-center">
	    	<div class="col-md-2 pt-3">
		      <button type="button" onclick="location.href='/avisos/{{ $aviso->id }}/editar'" class="btn btn-info" style="border-color:#ddd">Editar</button>
		    </div>
		    <div class="col-md-2 pt-3">
		    	{!! Form::open(['route' => ['aviso-delete', $aviso->id], 'method' => 'DELETE' ]) !!}
		      <button type="submit" class="btn btn-info" style="border-color:#ddd">Eliminar</button>
		      {!! Form::close() !!}
		    </div>
	    </div>
	    @endif
	  </div>
	</div>
</div>
@endsection