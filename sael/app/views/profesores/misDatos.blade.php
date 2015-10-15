@extends('layouts.master')

@section('jscript')
     {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'); }}
     {{ HTML::script('js/script.js') }}
     
    

@stop

@section('content')
      
        <h1> Datos del profesor </h1>
        <div id=datos>
        	<table class=profesor>
        		<tr>
        			<td>Clave del Profesor</td><td >{{$profesor->id}}</td>
        		
        		<tr>
        			<td>Nombre</td><td>{{$profesor->nombre." ".$profesor->paterno." ".$profesor->materno}}</td>
        		</tr>
        		<tr>
        			<td>Dirección</td><td>{{$profesor->calle}}</td>
        		</tr>
        		<tr>
        			<td>Municipio</td><td>{{$municipio}}</td><td>Colonia</td><td>{{$colonia}}</td>
        		</tr>
        		<tr>
        			<td>Estado</td><td>{{$estado}}</td><td>Codigo Postal</td><td>{{$profesor->cp}}</td>
        		</tr>
        		<tr>
        			<td>Teléfonos</td><td>{{$profesor->telefono}}</td><td>{{$profesor->celular}}</td>
        		</tr>
        		<tr>
        			<td>E-mail</td><td>{{$profesor->email}}</td>
        		</tr>
        		<tr>
        			<td>CURP</td><td>{{$profesor->curp}}</td>
        		</tr>
        		<tr>
        			<td>RFC</td><td>{{$profesor->rfc}}</td>
        		</tr>

        		
        	</table>
        </div>
        
            
            
@stop
