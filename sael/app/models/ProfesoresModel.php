<?php 

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class ProfesoresModel extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    
    protected $table = 'tblProfesor';
    protected $fillable=array('id','nombre','paterno','materno',
    'calle','colonia','delegacion','cp','ciudad',
    'telefono','celular','email','rfc','curp',
    'carrera');
    
    protected $primaryKey = 'id';
         
    
}
?>
