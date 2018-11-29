@extends('layouts.app')

@section('recursos')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="{{ asset('js/dropDown.js') }}"></script>
  
@endsection

@section('content')
<div>
  <div class="row bg-ficha">
	  <div class="one_quarter first"> 
	    <img src="/{{ $noticia->imagen->path }}{{ $noticia->imagen->name }}" style="width:100%;" class="img-responsive">
	  </div>
	  <div class="three_quarter">
	    <h5 style="text-align:center; color:#fff;" class="bg-principal">
	    Autor: {{ $noticia->user->name }}, Publicado: {{ $noticia->created_at }}
	  </h5>
	  <h6 class="title-divider"><span style="color:#de61d9">
	     {{ $noticia->titulo }}
	  </span></h6>
	  <h6 style="height:70px;overflow:hidden;">{{ $noticia->descripcion }}</h6> 
	    @if( $noticia->id_user == Auth::id())
	    <div class="row align-items-center justify-content-center">
	    	<div class="col-md-2 pt-3">
		      <button type="button" onclick="location.href='/noticia/{{ $noticia->id }}/editar'" class="btn btn-info" style="border-color:#ddd">Editar</button>
		    </div>
		    <div class="col-md-2 pt-3">
		    	{!! Form::open(['route' => ['noticia.destroy', $noticia->id], 'method' => 'DELETE' ]) !!}
		        <button type="submit" class="btn btn-info" style="border-color:#ddd">Eliminar</button>
		      {!! Form::close() !!}
		    </div>
	    </div>
	    @endif
	  </div>
	</div>
</div>
@endsection