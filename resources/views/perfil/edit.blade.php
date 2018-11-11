@extends('layouts.app')

@section('recursos')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="{{ asset('js/dropDown.js') }}"></script>
  

@endsection

@section('content')

<div class="container" style="margin-top:20px">
    <form class="form-horizontal" method="POST" action="{{ action('UserController@update') }}" enctype="multipart/form-data">
      {{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend>Actualizar Perfil</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Nombre</label>  
  <div class="col-md-4">
  <input name="name" class="form-control input-md" type="text" value="{{ Auth::user()->name }}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">E-mail</label>  
  <div class="col-md-4">
  <input name="email" class="form-control input-md" type="text" value="{{ Auth::user()->email }}">
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label">Avatar</label>
  <div class="col-md-4">
    <input type="file" class="form-control" name="file" accept="image/*">
  </div>
</div>

<div class="form-group">
  <label>Provincia: </label>
  <select id="comboboxProv">
    <option>Seleccionar</option>
    @foreach( $provincias as $provincia )
    <option value="{{$provincia->id}}">{{$provincia->name}}</option>
    @endforeach
  </select>
</div>

<div class="form-group">
  <label>Partido: </label>
  <select id="comboboxPart">
    <option>Seleccionar</option>
  </select>
</div>

<div class="form-group">
  <label>Localidad: </label>
  <select id="comboboxLocal">
    <option>Seleccionar</option>
  </select>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</div>



</fieldset>
</form>

</div>

@endsection