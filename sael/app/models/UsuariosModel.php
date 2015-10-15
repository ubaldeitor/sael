<?php 

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class UsuariosModel extends Eloquent implements UserInterface, RemindableInterface{ //Todos los modelos deben extender la clase Eloquent
    
    protected $table = 'tblUsuario';
    protected $fillable=array('id','password','correoUsuario','perfilUsuario');
    protected $primaryKey = 'id';
    
    protected $hidden = array('password');
    
    public function getAuthIdentifier()
    {
    	return $this->getKey();
    }
    
    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
    	return $this->password;
    }
    
    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     *
    public function getRememberToken()
    {
    	return $this->remember_token;
    }
    
    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string  $value
     * @return void
     *
    public function setRememberToken($value)
    {
    	$this->remember_token = $value;
    }
    
    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     *
    public function getRememberTokenName()
    {
    	return 'remember_token';
    }
    
    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
    	return $this->correoUsuario;
    }
    /**
     * Funcion de validación
     */
    public static function validaLogin($input) {
    
    	$rules = array(
    			'id' => 'Required|AlphaNum',
    			'password' => 'Required|AlphaNum',
    	);
    
    	return Validator::make($input, $rules);
    }
    
    /**agregado por actualizacion*/
    public function getRememberToken()
    {
    	return $this->remember_token;
    }
    
    public function setRememberToken($value)
    {
    	$this->remember_token = $value;
    }
    
    public function getRememberTokenName()
    {
    	return 'remember_token';
    }
    
}
?>
