@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Voluntarios
        </div>
        <div class="panel-body">
          <table class="table table-striped table-hover" style="background-color:black">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Hogar</th>
                <th>Rescatista</th>
                <th>Difundidor</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($voluntarios as $voluntario)
                <tr>
                  <td>{{ $voluntario->user->name }}</td>
                  <td>{{ $voluntario->hogar ? 'OK' : 'NO' }}</td>
                  <td>{{ $voluntario->rescatista ? 'OK' : 'NO' }}</td>
                  <td>{{ $voluntario->difundidor ? 'OK' : 'NO' }}</td>
                  @can('products.show')
                    <td width="10px">
                      <a href="{{ route('voluntario.show', $voluntario->id) }}" class="btn btn-sm btn-default">
                          ver
                      </a>
                    </td>
                  @endcan
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection