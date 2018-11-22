@extends('layouts.app')

@section('recursos')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="{{ asset('js/dropDown.js') }}"></script>
  
@endsection

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
    <form class="form-horizontal" method="POST" action="{{ action('UserController@update') }}" enctype="multipart/form-data">
      @method('PATCH')
      {{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend>Actualizar Perfil</legend>

<!-- Nombre input-->
<div class="form-group">
  <label class="col-md-4 control-label">Nombre</label>  
  <div class="col-md-4">
  <input name="name" class="form-control input-md" type="text" value="{{ Auth::user()->name }}">
    
  </div>
</div>

<!-- Mail input-->
<div class="form-group">
  <label class="col-md-4 control-label">E-mail</label>  
  <div class="col-md-4">
  <input name="email" class="form-control input-md" type="text" value="{{ Auth::user()->email }}">
    
  </div>
</div>

<!-- Avatar Button --> 
<div class="form-group">
  <label class="col-md-4 control-label">Avatar</label>
  <div class="col-md-4">
    <input type="file" class="form-control" name="file" accept="image/*">
  </div>
</div>

<!-- Selects de las zonas --> 
@include('componente.zonas')

<!-- Button -->
<div class="form-group">
  <div class="col-md-8">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</div>

</fieldset>
</form>

</div>

@endsection