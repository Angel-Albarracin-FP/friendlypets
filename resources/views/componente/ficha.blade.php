<div class="row bg-ficha">
  <div class="one_quarter first"> 
    <img src="{{ $aviso->imagen->path }}{{ $aviso->imagen->name }}" style="width:100%;" class="img-responsive">
  </div>
  <div class="three_quarter">
    <h5 style="text-align:center; color:#fff;" class="bg-principal">
    {{ $aviso->tipoAnimal->tipo }} {{ $aviso->tipoAviso->tipo }}, contacta a {{ $aviso->user->name }}
  </h5>
  <h6 class="title-divider"><span style="color:#de61d9">
    {{ $aviso->localidad->partido->provincia->name }}, {{ $aviso->localidad->partido->name }}, {{  $aviso->localidad->name }}
  </span></h6>
  <h6 style="height:70px;overflow:hidden;">{{ $aviso->descripcion }}</h6> 
  <a href="resultado.php?mascota=228625" target="_blank">
    <p style="text-align:center">
      <button type="button" class="btn btn-info" style="background-color:#f9da49;color:#000;border-color:#ddd; width:100%">  Ver la publicacion  </button>
    </p>
  </a>   
  </div>
</div>