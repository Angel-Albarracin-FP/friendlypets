@extends('layouts.app')

@section('content')


  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Usuarios
        </div>
        <div class="panel-body">
          <table class="table table-striped table-hover" style="background-color:black">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Mail</th>
                <th>Roles</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                    @foreach ($user->roles as $role)
                        {{ $role->name }}  
                    @endforeach
                  </td>
                  @can('role.edit')
                    <td width="10px">
                      <a href="{{ route('role.edit', $user->id) }}" class="btn btn-sm btn-default">
                          Editar
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


@endsection