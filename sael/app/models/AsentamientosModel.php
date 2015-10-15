<?php 

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class AsentamientosModel extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    
    protected $table = 'tblAsentamientos';
    protected $primaryKey = 'id';
    protected $fillable=array('asentamiento','codigo','tipoAsentamiento');
    
    public function codigo(){
    	return $this->belongsTo('CodigosPostalesModel','codigo','codigo');
    }
    
    
}
?>
