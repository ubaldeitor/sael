@extends('layouts.master')
  
@section('content')
      
        <h1> SAEL. Entrar </h1>

        @if ( $errors->count() > 0 )
      		<p>Ocurrieron los siguientes errores:</p>

      		<ul>
        		@foreach( $errors->all() as $message )
          			<li>{{ $message }}</li>
        		@endforeach
      		</ul>
    	@endif
        
        {{ Form::open(array('url'=>'login')) }}
            
            {{ Form::label('id','Id. de Usuario') }} 
            {{ Form::text('id','') }}<br />
            {{ Form::label('password','Contraseña') }}
            {{ Form::password('password') }}<br />
            {{ Form::submit('Enviar') }}<br />
            {{ Form::close() }}
@stop