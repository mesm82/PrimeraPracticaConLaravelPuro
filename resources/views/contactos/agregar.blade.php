@extends('plantilla')

@section('seccion')
<div class="container my-4">
<h1>Agregar Contacto</h1>
@if(session('mensaje'))
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
       {{ session('mensaje') }}
    </div>
@endif
<form action="{{ route('agregar') }}" method="post">
    @csrf
  <div class="form-group">
      @error('nombre')
      <div class="alert alert-danger" role="alert">
      <button class="close" data-dismiss="alert">&times;</button>
       El Nombre es obligatorio
    </div>
      @enderror
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
  </div>
  <div class="form-group">
  @error('telefono')
      <div class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
       El Teléfono es obligatorio
    </div>
  @enderror
    <label for="Teléfono">Teléfono</label>
    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" value="{{ old('telefono') }}">
  </div>
  <div class="form-group">
  @error('correo')
      <div class="alert alert-danger alert-dismissable" role="alert">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
       El Correo es obligatorio
    </div>
  @enderror
  <label for="Correo Electrónico">Correo Electrónico</label>
    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" value="{{ old('correo') }}">
  </div>
  <button type="submit" class="btn btn-primary">Agergar</button>
</form>

</div>
@endsection