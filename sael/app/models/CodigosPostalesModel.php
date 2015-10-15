<?php 

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class CodigosPostalesModel extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    
    protected $table = 'tblCodigosPostales';
    protected $primaryKey = 'codigo';
    protected $fillable=array('codigo','estado','ciudad','municipio');
    
    public function colonias(){
    	return $this->hasMany('AsentamientosModel','codigo');
    }
    
}
?>
