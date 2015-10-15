<?php 

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class AlumnosModel extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    
    protected $table = 'tblAlumno';
    protected $fillable=array('id','nombreAlumno','paternoAlumno','maternoAlumno',
    'calleAlumno','coloniaAlumno','delegacionAlumno','cpAlumno','estadoAlumno',
    'telefonoAlumno1','telefonoAlumno2','emailAlumno','nombreTutor1','nombreTutor2',
    'telefonoEmergencia1','alergias','discapacidad','primerosAuxilios','observaciones',
    'curpAlumno');
    
    protected $primaryKey = 'id';
        
	public function municipio(){
		
		return $this->hasOne('Municipio',array('idMunicipio','idEstado'),array('delegacionAlumno','estadoAlumno'));
	} 
    
}
?>
