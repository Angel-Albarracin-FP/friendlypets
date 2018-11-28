
  <form action="{{ action('AvisoController@index') }}" method="GET">
    {{ csrf_field() }}
    <div class="container-fluid bg-dark ">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-2 pt-3">
          <div class="form-group ">
            <select id="animal" name="animal" class="form-control">
              <option value="0" selected>Animal</option>
              @foreach ( $tipoAnimal as $animal )
              <option value="{{$animal->id}}">{{$animal->tipo}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-2 pt-3">
          <div class="form-group">
            <select id="aviso" name="aviso" class="form-control">
              <option value="0" selected>Aviso</option>
              @foreach ( $tipoAviso as $aviso )
              <option value="{{$aviso->id}}">{{$aviso->tipo}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-2 pt-3">
          <div class="form-group ">
            <select id="sexo" name="sexo" class="form-control">
              <option value="Z" selected>Sexo</option>
              <option value="M">Macho</option>
              <option value="H">Hembra</option>
            </select>
          </div>
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-primary btn-block">Buscar</button>
        </div>
      </div>
      <div class="row align-items-center justify-content-center">
        <div class="col-md-2 pt-3">
          <div class="form-group ">
            <select id="comboboxProv" name="provincia" class="form-control">
              <option value="0" selected>Provincia</option>
              @foreach ( $provincias as $provincia )
              <option value="{{$provincia->id}}">{{$provincia->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-2 pt-3">
          <div class="form-group">
            <select id="comboboxPart" name="partido" class="form-control">
              <option value="0" selected>Partido</option>
            </select>
          </div>
        </div>
        <div class="col-md-2 pt-3">
          <div class="form-group">
            <select id="comboboxLocal" name="localidad" class="form-control">
              <option value="0" selected>Localidad</option>
            </select>
          </div>
        </div>
        <div class="col-md-2">
          <button type="button" onclick="location.href='/avisos/crear'" class="btn btn-primary btn-block">Crear</button>
        </div>
      </div>
    </div>
  </form>
{{--  
{!! Form::open(['action' => 'AvisoController@index', 'method' => 'GET']) !!}
  <div class="container-fluid bg-dark ">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-2 pt-3">
        <div class="form-group ">
          {!! Form::select('tipo aviso', $tipoAviso) !!}
        </div>
    </div>
  </div>
{!! Form::close() !!}
--}}