@extends('layouts.app')

@section('content')

<div>
  <div>
    <h6 class="title-divider">
      <span>
        {{ $user->name }}
      </span>
    </h6>
    <p>
      Roles actuales: 
      @foreach ($user->roles as $role)
        {{ $role->name }}  
      @endforeach
    </p>
  </div>
  <h3>Seleccionar roles</h3>
  {!! Form::model($user, ['route' => ['role.update', $user->id], 'method' => 'PATCH']) !!}
    <div class="form-group" id="options">
      <ul class="list-unstyled">
        @foreach ($roles as $role)
          @if ($role->name != 'Owner')
            <li>
              <label>
                {{ Form::checkbox('roles[]', $role->id, null) }}
                {{ $role->name }}
              </label>
            </li>
          @else
            @foreach (Auth::user()->roles as $roleU)
              @if ($role->name == $roleU->name)
                <li>
                  <label>
                    {{ Form::checkbox('roles[]', $role->id, null) }}
                    {{ $role->name }}
                  </label>
                </li>
              @endif
            @endforeach
          @endif
        @endforeach
      </ul>
    </div>
    <!-- Button -->
    <div class="form-group">
      <div class="col-md-8">
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
      </div>
    </div>
  {!! Form::close() !!}
</div>

@endsection