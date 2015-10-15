<?php 

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Colonia extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    
    protected $table = 'tblColonias';
    protected $primaryKey = 'id';
    protected $fillable=array('idColonia','idMunicipio','colonia','idEstado','idCiudad','codigoPostal');
    
 
    
    
}
?>
