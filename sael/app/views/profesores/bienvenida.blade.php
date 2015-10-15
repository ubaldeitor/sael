@extends('layouts.master')
  
@section('content')
      
        <h1>Hola estimado Profesor</h1>
 
        <p>Te hemos enviado este correo para decirte que es un gusto para nosotros tenerte en nuestras aulas, 
           además te informamos que tu usuario y contraseña para acceder al Sistema de Administración Escolar
           en Línea son: </br></p>
           <ul>
               <li>Usuario: {{$id}}</li>
               <li>Password: {{$password}}</li>
           </ul>
       <p> Te recordamos que tus datos deben ser intrasferibles y deberás cuidar tu información.
           Esperamos que disfrutes este servicio de Colegio Kamii y completes tu registro en la dirección:</p></br>
       <p> http://colegiokamii.net/sael/public/ </p></br>
        
@stop
