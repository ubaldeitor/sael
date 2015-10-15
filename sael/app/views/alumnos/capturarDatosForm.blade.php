@extends('layouts.master')

@section('jscript')
     {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'); }}
     {{ HTML::script('js/script.js') }}
     
    

@stop

@section('content')
      
        <h1> Captura de datos del alumno </h1>
        @if ( $errors->count() > 0 )
      		<p>Ocurrieron los siguientes errores:</p>

      		<ul>
        		@foreach( $errors->all() as $message )
          			<li>{{ $message }}</li>
        		@endforeach
      		</ul>
    	@endif

        {{ Form::open(array('url' => '/alumnos/guardarDatos')) }}
            {{ Form::label('id','Id') }}
            {{ Form::text('id',$id) }}<br />
            {{ Form::label('Texto1','Datos del Alumno')}}</br>
            {{ Form::label('alumnoNombre','Nombre(s)') }}
            {{ Form::text('nombreAlumno','') }}
            {{ Form::label('alumnoPaterno','Apellido Paterno') }}
            {{ Form::text('paternoAlumno','') }}
            {{ Form::label('alumnoMaterno','Apellido Materno') }}
            {{ Form::text('maternoAlumno','') }}<br>
            {{ Form::label('curpAlumno','CURP del Alumno') }}
            {{ Form::text('curpAlumno','') }}<br />
            {{ Form::label('Texto2','Dirección del alumno')}}<br />
            {{ Form::label('estado','Estado') }}
            {{ Form::select('estadoAlumno',$estados,null,array('id' => 'estadoAlumno')) }}<br />
            {{ Form::label('municipio','Delegación') }}
            	<select id="delegacionAlumno" name="delegacionAlumno">
    		    	
    		   </select> <br />
            {{ Form::label('colonia','Colonia') }}
               <select id="coloniaAlumno" name="coloniaAlumno">
    		    	
    		   </select> <br />	
    		{{ Form::label('calle','Calle y número') }}
            {{ Form::text('calleAlumno', '') }}
            {{ Form::label('alumnoCP','Código Postal') }}
            {{ Form::text('cpAlumno','') }}<br />
            {{ Form::label('telefono1','Teléfono') }}
            {{ Form::text('telefonoAlumno1', '') }}
            {{ Form::label('telefono2','Teléfono alternativo') }}
            {{ Form::text('telefonoAlumno2', '') }}<br />
            {{ Form::label('emailAlumno','Correo Electrónico de Contacto') }}
            {{ Form::text('emailAlumno', '') }}<br />
            {{ Form::label('Texto3','Padres o tutores del alumno')}}</br>
            {{ Form::label('tutor1','Nombre del primer padre o tutor') }}
            {{ Form::text('nombreTutor1', '') }}<br />
            {{ Form::label('tutor2','Nombre del segundo padre o tutor') }}
            {{ Form::text('nombreTutor2', '') }}<br />
            {{ Form::label('telefonoEmergencias','Teléfono de emergencias') }}
            {{ Form::text('telefonoEmergencia1', '') }}<br />
            {{ Form::label('Texto4','Observaciones del alumno')}}</br>
            {{ Form::label('alergias','Alergias del alumno') }}
            {{ Form::text('alergias', '') }}<br />
            {{ Form::label('discapacidad','El alumno presenta alguna discapacidad') }}
            {{ Form::text('discapacidad', '') }}<br />
            {{ Form::label('primerosAuxilios','¿El padre autoriza primeros auxilios y atención médica en caso de una emergencia?') }}
            {{ Form::select('primerosAuxilios',array(1=>'SI',0=>'NO'),'SI') }} <br />
            {{ Form::label('observaciones','Observaciones generales') }}
            {{ Form::text('observaciones', '') }}<br />
            {{ Form::submit('Guardar') }}<br />
            {{ Form::close() }}
            
            
@stop
