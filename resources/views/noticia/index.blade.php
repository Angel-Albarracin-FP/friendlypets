<div class="col-sm-8">
  @foreach ($noticias as $noticia)
  <div class="row">
    <div class="col-sm-6">
      <div class="fakeimg">
        <img class="img-responsive" style="height: 200px;width: 400px" src="{{ $noticia->imagen->path }}{{ $noticia->imagen->name }}" alt="img">
      </div>
    </div>
    <div class="col-sm-6">
      <h2>{{ $noticia->titulo }}</h2>
      <h5>{{ $noticia->created_at }}, Autor: {{ $noticia->user->name }} </h5>
      <p>{{ $noticia->descripcion }}</p>
    </div>
  </div>
  <br>
  @endforeach
</div>