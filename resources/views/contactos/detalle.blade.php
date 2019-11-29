@extends('plantilla')

@section('seccion')

<h1>Detalle del Contacto</h1>
<h4>ID: {{$contacto->id}}</h4>
<h4>NOMBRE: {{$contacto->nombre}}</h4>
<h4>TELÉFONO: {{$contacto->telefono}}</h4>
<h4>EMAIL: {{$contacto->correo}}</h4>

@endsection