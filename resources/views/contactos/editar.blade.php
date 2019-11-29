@extends('plantilla')

@section('seccion')
<div class="container my-4">
<h1>Editar Contacto {{ $contacto->id }}</h1>
@if(session('mensaje'))
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
       {{ session('mensaje') }}
    </div>
@endif
<form action="{{ route('contactos.modificar', $contacto->id) }}" method="post">
    @method('PUT')
    @csrf
  <div class="form-group">
      @error('nombre')
      <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
       El Nombre es obligatorio
    </div>
      @enderror
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{ $contacto->nombre  }}">
  </div>
  <div class="form-group">
  @error('telefono')
      <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
       El Teléfono es obligatorio
    </div>
  @enderror
    <label for="Teléfono">Teléfono</label>
    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" value="{{ $contacto->telefono }}">
  </div>
  <div class="form-group">
  @error('correo')
      <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
       El Correo es obligatorio
    </div>
  @enderror
  <label for="Correo Electrónico">Correo Electrónico</label>
    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" value="{{ $contacto->correo }}">
  </div>
  <button type="submit" class="btn btn-warning">Editar</button>
</form>

</div>
@endsection