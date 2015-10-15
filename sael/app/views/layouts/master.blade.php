<!doctype html>
<html>
<head>
	@include('includes/head')
        {{ HTML::style('css/saelstyle.css'); }}
     @yield('jscript')
     
</head>
<body>
    <div id="marco">
        <div id="container">

	<div id="encabezado">
		@include('includes/header')
	</div>
        <div id="marcointerno">
            <div id="menubar">
                @yield('menu')
            </div>
            <div id="principal" >

			@yield('content')

            </div>
        </div>

	<div id="pie">
		@include('includes/footer')
	</div>

        </div>
    </div>
</body>
</html>
