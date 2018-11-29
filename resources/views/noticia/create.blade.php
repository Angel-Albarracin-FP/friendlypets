@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>
  <form class="form-horizontal" method="POST" action="{{ action('NoticiaController@store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group ">
      <label class="col-md-4 control-label">Autor: {{ Auth::user()->name }}</label>  
    </div>
    <!-- Foto boton --> 
    <div class="form-group">
      <label class="col-md-4 control-label">Foto</label>
      <div class="col-md-4">
        <input type="file" class="form-control" name="imagen" accept="image/*">
      </div>
    </div>
    <!-- Titulo de la noticia -->
    <div class="form-group ">
      <label class="col-md-4 control-label">Titulo</label>  
      <div class="col-md-4">
        <input name="titulo" class="form-control input-md" type="text" placeholder="Ingrese el titulo">
      </div>
    </div>
    <!-- Descripcion de la noticia -->
    <div class="form-group"> 
      <div class="col-md-4">
        <textarea color="black" style="color:black;" name="descripcion" cols="40" rows="5" placeholder="Cuerpo de la noticia"></textarea>
      </div>
    </div>
    <!-- Button -->
    <div class="form-group">
      <div class="col-md-8">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </form>
</div>

@endsection