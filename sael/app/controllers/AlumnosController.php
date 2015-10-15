<?php 
 
class AlumnosController extends BaseController {
 
    public function capturarDatos(){
    	$id=Auth::user()->id;
    	//$estados=Estado::lists('estado','id');
    	    $estados[0]='Selecciona un estado';
    	foreach (Estado::select('id', 'estado')->orderBy('id','asc')->get() as $edo){
    		$estados[$edo->id] = $edo->estado;
    	}
    	//array_unshift($estados,'Seleccione un Estado');
    	return View::make('alumnos/capturarDatosForm')->with('estados',$estados)->with('id',$id);
    }
    
    public function guardarDatos(){
    	$datos=Input::all();
    	$reglas=array('id'=>'required|alpha_num',
    			'nombreAlumno'=>'required|alpha_spaces',
    			'paternoAlumno'=>'required|alpha',
    			'maternoAlumno'=>'required|alpha',
    			'curpAlumno'=>'required|alpha_num',
    			'calleAlumno'=>'required|direccion',
    			'cpAlumno'=>'required|numeric',
    			'telefonoAlumno1'=>'required|numeric',
    			'telefonoAlumno2'=>'required|numeric',
    			'emailAlumno'=>'required|email',
    			'nombreTutor1'=>'required|alpha_spaces',
    			'nombreTutor2'=>'required|alpha_spaces',
    			'telefonoEmergencia1'=>'required|numeric',
    			'observaciones'=>'required|alpha_spaces');
    	$validar=Validator::make($datos,$reglas);
    	if($validar->fails()){
    		return Redirect::to('alumnos/registro/{id}')->withErrors($validar);
    	}else{
    	  
    		$alumno = new AlumnosModel;
    		$alumno->fill($datos);
    		$alumno->save();

    		return View::make('alumnos/guardarDatos');
    	}
    }

    public function verDatos($id){
    	$alumno=AlumnosModel::find($id);
    	$estado=Estado::find($alumno->estadoAlumno);
    	$municipio=Municipio::where('idMunicipio','=',$alumno->delegacionAlumno)->where('idEstado','=',$alumno->estadoAlumno)->first();
    	$colonia=Colonia::where('idMunicipio','=',$alumno->delegacionAlumno)->where('idEstado','=',$alumno->estadoAlumno)->where('idColonia','=',$alumno->coloniaAlumno)->first();
    	//$municipio=AlumnosModel::find($id)->municipio;
    	return View::make('alumnos/misDatos', array('alumno'=>$alumno))->with('municipio', $municipio->municipio)->with('colonia', $colonia->colonia)->with('estado',$estado->estado);
    	
    }
   
}
?>
 
