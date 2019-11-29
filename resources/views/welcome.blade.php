@extends('plantilla')

@section('seccion')


<div class="container my-4">  
        <h1 class="display-4">Contactos</h1>
        @if(session('mensaje'))
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
       {{ session('mensaje') }}
    </div>
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID Contacto</th>
      <th scope="col">Nombre</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Correo</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
      @foreach($contactos as $contacto)
    <tr>
      <th scope="row">{{$contacto->id}}</th>
      <td>
          <a href="{{ route('contantos.detalle', $contacto->id) }}">
          {{$contacto->nombre}}
          </a>
      </td>
      <td>{{$contacto->telefono}}</td>
      <td>{{$contacto->correo}}</td>
      <td><a href="{{ route('contactos.editar', $contacto->id) }}" class="btn btn-warning btn-sm">Editar</a></td>
      <td>
          <form action="{{ route('contactos.eliminar', $contacto->id) }}" method="post">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
          </form>
      </td>
    </tr>
    @endforeach()
  </tbody>
</table>
{{$contactos->links()}}
<a href="{{ route('form_agregar') }}" class="btn btn-primary">Agregar Contacto</a> 
@endsection
