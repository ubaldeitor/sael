@extends('layouts.master')

@section('jscript')
     {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'); }}
     {{ HTML::script('js/script.js') }}
     
    

@stop

@section('content')
      
        <h1> Datos del alumno </h1>
        <div id=datos>
        	<table class=alumno>
        		<tr>
        			<td>Clave del Alumno</td><td >{{$alumno->id}}</td>
        		
        		<tr>
        			<td>Nombre</td><td>{{$alumno->nombreAlumno." ".$alumno->paternoAlumno." ".$alumno->maternoAlumno}}</td>
        		</tr>
        		<tr>
        			<td>Dirección</td><td>{{$alumno->calleAlumno}}</td>
        		</tr>
        		<tr>
        			<td>Municipio</td><td>{{$municipio}}</td><td>Colonia</td><td>{{$colonia}}</td>
        		</tr>
        		<tr>
        			<td>Estado</td><td>{{$estado}}</td><td>Codigo Postal</td><td>{{$alumno->cpAlumno}}</td>
        		</tr>
        		<tr>
        			<td>Teléfonos</td><td>{{$alumno->telefonoAlumno1}}</td><td>{{$alumno->telefonoAlumno2}}</td><td>Emergencias</td><td>{{$alumno->telefonoEmergencia1}}</td>
        		</tr>
        		<tr>
        			<td>E-mail</td><td>{{$alumno->emailAlumno}}</td>
        		</tr>
        		<tr>
        			<td>Tutor 1</td><td>{{$alumno->nombreTutor1}}</td>
        		</tr>
        		<tr>
        			<td>Tutor 2</td><td>{{$alumno->nombreTutor2}}</td>
        		</tr>
        		<tr>
        			<td>Discapacidad</td><td>{{$alumno->discapacidad}}</td>
        		</tr>
        		<tr>
        			<td>Alergias</td><td>{{$alumno->alergias}}</td><td>Primeros Auxilios</td><td>{{$alumno->primeroAuxilios}}</td>
        		</tr>
        		<tr>
        			<td>Observaciones</td><td>{{$alumno->observaciones}}</td>
        		</tr>
        		
        	</table>
        </div>
        
            
            
@stop
