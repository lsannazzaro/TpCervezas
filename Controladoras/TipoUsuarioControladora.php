<?php namespace Controladoras;	

class TipoUsuarioControladora{

	private $datosUsuario;

	function __construct(){

    	
    	$this->datosUsuario = \Daos\UsuariosDaos::getInstancia();
    	
    }

	public function logearse($email,$pass){
		
		$valides=$this->datosUsuario->traerUno($email);

        if($valides==NULL){
            echo 'Email inexistente';
        }
        else{
            $UserArray=$this->datosUsuario->isValid($email, $pass);
            if($UserArray==NULL){
                echo 'Contraseña incorrecta';
            }
            else{
                $this->validarRolSession($email);
            }    
	}
}

public function validarRolSession($email){
       
        if($this->datosUsuario->isAdmin($email)){
            
            echo ' Login Admin';

        }
        else if($this->datosUsuario->isUser($email)){
            echo ' Login User';

        }
    }
}

?>
