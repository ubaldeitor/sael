<?php 

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Ciudad extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    
    protected $table = 'tblCiudades';
    protected $primaryKey = 'id';
    protected $fillable=array('ciudad','codigo');
    
 
    
    
}
?>
