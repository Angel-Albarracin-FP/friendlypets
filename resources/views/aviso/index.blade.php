@extends('layouts.app')

@section('content')
<div class="container">
  <div class="container-fluid bg-dark ">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-2 pt-3">
        <div class="form-group ">
          <select id="inputState " class="form-control">
            <option selected>Brand</option>
            <option>BMW</option>
            <option>Audi</option>
            <option>Maruti</option>
            <option>Tesla</option>
          </select>
        </div>
      </div>
      <div class="col-md-2 pt-3">
        <div class="form-group">
          <select id="inputState" class="form-control">
            <option selected>Model</option>
            <option>BMW</option>
            <option>Audi</option>
            <option>Maruti</option>
            <option>Tesla</option>
          </select>
        </div>
      </div>
      <div class="col-md-2 pt-3">
        <div class="form-group">
          <select id="inputState" class="form-control">
            <option selected>Budget</option>
            <option>BMW</option>
            <option>Audi</option>
            <option>Maruti</option>
            <option>Tesla</option>
          </select>
        </div>
      </div>
      <div class="col-md-2 pt-3">
        <div class="form-group">
          <select id="inputState" class="form-control">
            <option selected>Type</option>
            <option>BMW</option>
            <option>Audi</option>
            <option>Maruti</option>
            <option>Tesla</option>
          </select>
        </div>
      </div>
      <div class="col-md-2">
        <button type="button" class="btn btn-primary btn-block">Buscar</button>
      </div>
      <div class="col-md-2">
        <button type="button" class="btn btn-primary btn-block">Crear</button>
      </div>
    </div>
  </div>
{{-- 
    <div class="col-sm-8">
        @foreach ($noticias as $noticia)
        <div class="row">
          <div class="col-sm-6">
            <div class="fakeimg">
              <img class="img-fluid" style="height: 200px;width: 400px" src="{{ $noticia->imagen }}" alt="img">
            </div>
          </div>
          <div class="col-sm-6">
            <h2>{{ $noticia->titulo }}</h2>
            <h5>{{ $noticia->fecha }}, autor: {{ $noticia->autor }} </h5>
            <p>{{ $noticia->descripcion }}</p>
          </div>
        </div>
          
        <br>
        @endforeach
    </div>
  </div> --}}
</div> 
@endsection
