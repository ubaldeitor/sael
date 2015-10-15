<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/**
 * Route / esta ruta es la inicial y despliega la pantalla del login de la aplicación 
 */
Route::get('/', function()
{
	return View::make('usuarios.login');
})->before('guest');

/**
 * La ruta login se usa para que el usuario introduzca el usuario y password asignados.  
 * @param login
 * 
 */
Route::post('login', array('uses'=>'UsuariosController@postLogin'));

 
/**
 * Se usa para generar usuarios nuevos debe de estar en el bloque de funcionalidades del administrador. 
 */
Route::get('usuarios/nuevo', array('uses' => 'UsuariosController@nuevoUsuario'));

/*
 * Guarda los datos del usuario nuevo, perfil, password y clave. 
 */
Route::post('usuarios/guardarUsuario', array('uses' => 'UsuariosController@crearUsuario'));

/*
 * Obtener municipios se utiliza para rellenar los controles select en los formularios de registro
 * de alumnos y profesores. 
 */
Route::get('obtenerMunicipios', function(){
	$estado = Input::get('option');
	$municipios[0]='Selecciona tu Delegación o Municipio';
	foreach (Municipio::where('idEstado',$estado)->orderBy('municipio','asc')->get() as $mun){
		$municipios[$mun->idMunicipio] = $mun->municipio;
	}
	return Response::json($municipios);
});

Route::get('obtenerColonias',function(){
	$estado = Input::get('estado');
	$municipio = Input::get('municipio');
	//$coloniaDatos=DB::table('tblAsentamientos')->where('codigo',$codigo)->lists('asentamiento');
	$colonias[0]='Selecciona tu Colonia';
	foreach (Colonia::where('idEstado',$estado)->where('idMunicipio',$municipio)->orderBy('colonia','asc')->get() as $col){
		$colonias[$col->idColonia] = $col->colonia;
	}
	
	return Response::json($colonias);
	//return Response::eloquent($coloniaDatos->get(['id','asentamiento']));
});

	Route::get('usuarios/salir', array('uses' => 'UsuariosController@salir'));

	Route::group(array('before' => 'auth|alumno'), function(){
    
	/*Route::get('alumnos/inicio', array('uses' => 'AlumnosController@inicio')); */
	
    Route::get('alumnos/registro/{id}', array('uses' => 'AlumnosController@capturarDatos'));
    
    Route::post('alumnos/guardarDatos', array('uses' => 'AlumnosController@guardarDatos'));
    Route::get('alumnos/verDatos/{id}', array('uses'=>'AlumnosController@verDatos'));
    
});
		Route::group(array('before' => 'auth|profesor'), function(){
		
			/*Route::get('alumnos/inicio', array('uses' => 'AlumnosController@inicio')); */
		
			Route::get('profesores/registro/{id}', array('uses' => 'ProfesoresController@capturarDatos'));
		
			Route::post('profesores/guardarDatos', array('uses' => 'ProfesoresController@guardarDatos'));
			Route::get('profesores/verDatos/{id}', array('uses'=>'ProfesoresController@verDatos'));
		
		});

    