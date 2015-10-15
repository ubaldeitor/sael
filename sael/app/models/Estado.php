<?php 

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Estado extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    
    protected $table = 'tblEstados';
    protected $primaryKey = 'id';
    protected $fillable=array('id','estado');
    
 
    
    
}
?>
