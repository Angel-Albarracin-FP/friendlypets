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
  <form class="form-horizontal" method="POST" action="{{ action('AvisoController@update', ['id' => $aviso->id]) }}" enctype="multipart/form-data">
    @method('PATCH')
    {{ csrf_field() }}
    <fieldset>

      <!-- Form Name -->
      <legend>Formulario Aviso</legend>

      <!-- Foto Button --> 
      <div class="form-group">
        <label class="col-md-4 control-label">Foto</label>
        <div class="col-md-4">
          <input type="file" class="form-control" name="file" accept="image/*">
        </div>
      </div>

      @include('componente.zonas')

      <div class="row">
        <div class="col-md-2 pt-3">
          <div class="form-group ">
            <select id="inputState" name="animal" class="form-control">
              <option selected>Animal</option>
              @foreach ( $tipoAnimal as $animal )
                <option value="{{$animal->id}}">{{$animal->tipo}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-2 pt-3">
          <div class="form-group">
            <select id="inputState" name="aviso" class="form-control">
              <option selected>Aviso</option>
              @foreach ( $tipoAviso as $aviso )
                <option value="{{$aviso->id}}">{{$aviso->tipo}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-2 pt-3">
          <div class="form-group ">
            <select id="sexo" name="sexo" class="form-control">
              <option value="0" selected>Sexo</option>
              <option value="M">Macho</option>
              <option value="H">Hembra</option>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group"> 
        <div class="col-md-4">
          <textarea color="black" name="descripcion" cols="40" rows="5">
            {{ $aviso->descripcion }}
          </textarea>
        </div>
      </div>
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