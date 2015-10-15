@extends('layouts.master')
 
@section('sidebar')
     @parent
     Registro exitoso
@stop
 
@section('content')
        <h1>
  Los datos del profesor se guardaron en la base de datos con éxito.<br>
  Favor de ingresar nuevamente para utilizar SAEL.<br>
      
  <li>{{link_to('usuarios/salir', 'Salir del sistema') }}</li>
  
</h1>
@stop
