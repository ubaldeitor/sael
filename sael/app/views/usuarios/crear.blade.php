@extends('layouts.master')
  
@section('content')
      
        <h1> Crear Usuario </h1>

        {{ Form::open(array('url' => '/usuarios/guardarUsuario')) }}
            {{ Form::label('id','Id') }}
            {{ Form::text('id','') }}<br />
            {{ Form::label('password','Contraseña') }}
            {{ Form::password('password') }}<br />
            {{ Form::label('correoUsuario','Correo electrónico') }}
            {{ Form::text('correoUsuario','') }}<br />
	        {{ Form::label('perfilUsuario','Perfil') }}
            {{ Form::select('perfilUsuario', array('ALUMNO' => 'Alumno', 'PROFESOR' => 'Profesor' , 'ADMINISTRADOR' => 'Administrador'), 'ALUMNO'); }}<br />
            {{ Form::submit('Guardar') }}<br />
            {{ Form::close() }}
@stop
