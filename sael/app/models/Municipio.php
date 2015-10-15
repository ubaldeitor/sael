<?php 

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Municipio extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    
    protected $table = 'tblMunicipios';
    protected $primaryKey = 'id';
    protected $fillable=array('idMunicipio','idEstado','municipio','idCiudad');
    
 
    
    
}
?>
