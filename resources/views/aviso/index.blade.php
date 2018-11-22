@extends('layouts.app')

@section('recursos')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="{{ asset('js/dropDown.js') }}"></script>
  
@endsection

@section('content')
<div>
  @include('componente.filtros')
  <div id="rm_search_listado" class="col-xs-12 col-md-12" style="margin:0px;">
    <br>
    @foreach( $avisos as $aviso )
    @include('componente.ficha')
    @endforeach
    {!! $avisos->appends(['animal' => $tipoAnimalId, 'aviso' => $tipoAvisoId, 'sexo' => $sexo])->links() !!}
</div> 
@endsection
