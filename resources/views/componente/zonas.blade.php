<div class="row">
  <div class="col-md-2 pt-3">
    <div class="form-group ">
      <select id="comboboxProv" class="form-control">
        <option value="">Provincia</option>
        @foreach( $provincias as $provincia )
        <option value="{{$provincia->id}}">{{$provincia->name}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="col-md-2 pt-3">
    <div class="form-group">
      <select id="comboboxPart" class="form-control">
        <option value="">Partido</option>
      </select>
    </div>
  </div>
  <div class="col-md-2 pt-3">
    <div class="form-group">
      <select id="comboboxLocal" name="localidad" class="form-control">
        <option value="">Localidad</option>
      </select>
    </div>
  </div>
</div>