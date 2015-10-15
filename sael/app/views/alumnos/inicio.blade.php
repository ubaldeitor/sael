@extends('layouts.master')
  
@section('content')
      
        <h1> Bienvenido Alumno </h1>

        <p> En el menú de la izquierda encontrarás las diferentes opciones que </br>
            dispones dentro del Sistema de Administración Escolar en Línea </br>
            SAEL.</p> </br>
        <p> Si por alguna razón tuvieras problemas al tratar de realizar </br>
            algún procedimiento no dudes en ponerte en contacto con nosotros.</p>
@stop

@section('menu')
<h1>Menú de opciones</h1>
<ul>
    <li> {{ link_to('alumnos/verDatos/'.$usuario->id, 'Mis Datos') }} </li>
    <li>{{ link_to('usuarios/salir', 'Salir del sistema') }}</li>
</ul>
    
@stop