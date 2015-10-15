@extends('layouts.master')

@section('jscript')
     {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'); }}
     {{ HTML::script('js/scriptProfe.js') }}
     
    

@stop

@section('content')
      
        <h1> Captura de datos del profesor </h1>
        @if ( $errors->count() > 0 )
      		<p>Ocurrieron los siguientes errores:</p>

      		<ul>
        		@foreach( $errors->all() as $message )
          			<li>{{ $message }}</li>
        		@endforeach
      		</ul>
    	@endif

        {{ Form::open(array('url' => '/profesores/guardarDatos')) }}
            {{ Form::label('id','Id') }}
            {{ Form::text('id',$id) }}<br />
            {{ Form::label('Texto1','Datos del Profesor')}}</br>
            {{ Form::label('profesorNombre','Nombre(s)') }}
            {{ Form::text('nombre','') }}
            {{ Form::label('profesorPaterno','Apellido Paterno') }}
            {{ Form::text('paterno','') }}
            {{ Form::label('profesorMaterno','Apellido Materno') }}
            {{ Form::text('materno','') }}<br>
            {{ Form::label('curpProfesor','CURP del profesor') }}
            {{ Form::text('curp','') }}<br />
            {{ Form::label('Texto2','Dirección del profesor')}}<br />
            {{ Form::label('estado','Estado') }}
            {{ Form::select('ciudad',$estados,null,array('id' => 'ciudad')) }}<br />
            {{ Form::label('municipio','Delegación') }}
            	<select id="delegacion" name="delegacion">
    		    	
    		   </select> <br />
            {{ Form::label('colonia','Colonia') }}
               <select id="colonia" name="colonia">
    		    	
    		   </select> <br />	
    		{{ Form::label('calle','Calle y número') }}
            {{ Form::text('calle', '') }}
            {{ Form::label('CP','Código Postal') }}
            {{ Form::text('cp','') }}<br />
            {{ Form::label('telefono','Teléfono') }}
            {{ Form::text('telefono', '') }}
            {{ Form::label('celular','Teléfono celular') }}
            {{ Form::text('celular', '') }}<br />
            {{ Form::label('email','Correo Electrónico de Contacto') }}
            {{ Form::text('email', '') }}<br />
            {{ Form::label('rfc','RFC del profesor') }}
            {{ Form::text('rfc', '') }}<br />
            {{ Form::label('carrera','Carrera del profesor') }}
            {{ Form::text('carrera', '') }}<br />
            {{ Form::submit('Guardar') }}<br />
            {{ Form::close() }}
            
            
@stop
