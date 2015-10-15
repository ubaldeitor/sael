<?php 
 
class ProfesoresController extends BaseController {
 
    public function capturarDatos(){
    	$id=Auth::user()->id;
    	//$estados=Estado::lists('estado','id');
    	    $estados[0]='Selecciona un estado';
    	foreach (Estado::select('id', 'estado')->orderBy('id','asc')->get() as $edo){
    		$estados[$edo->id] = $edo->estado;
    	}
    	//array_unshift($estados,'Seleccione un Estado');
    	return View::make('profesores/capturarDatosForm')->with('estados',$estados)->with('id',$id);
    }
    
    public function guardarDatos(){
    	$datos=Input::all();
    	$reglas=array('id'=>'required|alpha_num',
    			'nombre'=>'required|alpha_spaces',
    			'paterno'=>'required|alpha',
    			'materno'=>'required|alpha',
    			'curp'=>'required|alpha_num',
    			'calle'=>'required|direccion',
    			'cp'=>'required|numeric',
    			'telefono'=>'required|numeric',
    			'celular'=>'required|numeric',
    			'email'=>'required|email',
    			'rfc'=>'required|alpha_num',
    			'carrera'=>'required|alpha_spaces');
    	$validar=Validator::make($datos,$reglas);
    	if($validar->fails()){
    		return Redirect::to('profesores/registro/{id}')->withErrors($validar);
    	}else{
    	  
    		$profesor = new ProfesoresModel;
    		$profesor->fill($datos);
    		$profesor->save();

    		return View::make('profesores/guardarDatos');
    	}
    }

    public function verDatos($id){
    	$profesor=ProfesoresModel::find($id);
    	$estado=Estado::find($profesor->ciudad);
    	$municipio=Municipio::where('idMunicipio','=',$profesor->delegacion)->where('idEstado','=',$profesor->ciudad)->first();
    	$colonia=Colonia::where('idMunicipio','=',$profesor->delegacion)->where('idEstado','=',$profesor->ciudad)->where('idColonia','=',$profesor->colonia)->first();
    	//$municipio=AlumnosModel::find($id)->municipio;
    	return View::make('profesores/misDatos', array('profesor'=>$profesor))->with('municipio', $municipio->municipio)->with('colonia', $colonia->colonia)->with('estado',$estado->estado);
    	
    }
   
}
?>
 
