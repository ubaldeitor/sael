<?php 
 
class UsuariosController extends BaseController {
 
    /**
     * Muestra la lista con todos los usuarios
     
    public function mostrarUsuarios()
    {
        $usuarios = Usuario::all();
        return View::make('usuarios.lista', array('usuarios' => $usuarios));
    }
    */
 
    /**
     * Muestra formulario para crear Usuario
     */
    public function nuevoUsuario()
    {
        return View::make('usuarios.crear');
    }
 
 
    /**
     * Crear el usuario nuevo
     */
    public function crearUsuario()
    {
    	$datos=Input::all();
    	$reglas=array('id'=>'required|alpha_num',
    					'password'=>'required|alpha_num',
    					'correoUsuario'=>'required|email',
    					'perfilUsuario'=>'required');
    	$validar=Validator::make($datos,$reglas);
    	if($validar->fails()){
    		return Redirect::to('login')->withErrors($validar);
    	}else{
    	$usuario = new UsuariosModel;
    	$usuario->id = Input::get('id');
    	$usuario->password = Hash::make(Input::get('password'));
    	$usuario->correoUsuario=Input::get('correoUsuario');
    	$usuario->perfilusuario=Input::get('perfilUsuario');
    	$usuario->save();
    	Mail::send('alumnos.bienvenida',array('id'=>Input::get('id'), 'password'=>Input::get('password')), function($message){
    		$message->to(Input::get('correoUsuario'), 'Alumno Kamii')->subject('Bienvenido a Colegio Kamii');
    	});
        return View::make('usuarios/guardado');
    	}
    // el método redirect nos devuelve a la ruta de mostrar la lista de los usuarios
 
    }
 
     /**
     * Ver usuario con id
     
    public function verUsuario($id)
    {
    // en este método podemos observar como se recibe un parámetro llamado id
    // este es el id del usuario que se desea buscar y se debe declarar en la ruta como un parámetro 
    
        $usuario = Usuario::find($id);
        // para buscar al usuario utilizamos el metido find que nos proporciona Laravel 
        // este método devuelve un objete con toda la información que contiene un usuario
    
    return View::make('usuarios.ver', array('usuario' => $usuario));
    }*/
    public function postLogin()
    {
    	// get POST data
    	         
    			
    	$datos=UsuariosModel::validaLogin(Input::all());
    	
    			if($datos->passes()){
    				$id=Input::get('id');
    				//$password=Hash::make(Input::get('password'));
    				$password=Input::get('password');
    				
    				if(Auth::attempt(array('id' => $id, 'password' => $password)))
    				{
    					// we are now logged in, go to admin
    					if(Auth::user()->perfilUsuario == 'ALUMNO'){
    						
    						if(!(AlumnosModel::find($id))){
    							$id=Auth::user()->id;
    							//$estados=Estado::lists('estado','id');
    							$estados[0]='Selecciona un estado';
    							foreach (Estado::select('id', 'estado')->orderBy('id','asc')->get() as $edo){
    								$estados[$edo->id] = $edo->estado;
    							}
    							return View::make('alumnos/capturarDatosForm')->with('estados',$estados)->with('id',$id);
    						}else{
    							$usuario=UsuariosModel::find($id);
    							return View::make('alumnos.inicio')->with('usuario',$usuario);
    						}
    					}else{
    							if(Auth::user()->perfilUsuario == 'PROFESOR'){
    					
    								if(!(ProfesoresModel::find($id))){
    									$id=Auth::user()->id;
    									//$estados=Estado::lists('estado','id');
    									$estados[0]='Selecciona un estado';
    										foreach (Estado::select('id', 'estado')->orderBy('id','asc')->get() as $edo){
    										$estados[$edo->id] = $edo->estado;
    									}
    									return View::make('profesores/capturarDatosForm')->with('estados',$estados)->with('id',$id);
    								}else{
    									$usuario=UsuariosModel::find($id);
    									return View::make('profesores.inicio')->with('usuario',$usuario);
    								}
    							}
    					}
    				
    				}else{
    					return 'Credenciales erroneas';
    				}
    			}
    	   return Redirect::to('/')->withErrors($datos->messages()->all());
			
    }
    
    public function salir(){
    	Auth::logout();
    	return View::make('usuarios/salir');
    }
}
?>
 
