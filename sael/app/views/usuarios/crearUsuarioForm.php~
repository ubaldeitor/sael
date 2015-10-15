@extends('layouts.master')
 
@section('sidebar')
     @parent
     Agregar Nuevo Usuario
@stop
 
@section('content')
        {{ HTML::link('usuarios', 'volver'); }}
        <h1>
  Crear Usuario
      
    
  
</h1>
        {{ Form::open(array('url' => 'usuarios/guardarUsuario')) }}
            {{Form::label('id', 'Id')}}
            {{Form::text('id', '')}}
            {{Form::password('password', 'Contraseña')}}
            {{Form::text('password', '')}}
            {{Form::label(correoUsuario, 'Correo electrónico')}}
            {{Form::text('correoUsuario', '')}}
	    {{Fomr::label('perfilUsuario','Perfil')}}
            {{Form::text('perfilUsuario','')}}
            {{Form::submit('Guardar')}}
        {{ Form::close() }}
@stop
