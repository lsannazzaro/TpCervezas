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
       
        if($this->datosUsuarios->isAdmin($email)){
            
            $listaPeliculas = new \Daos\PeliculasDao();
            $listadoP = $listaPeliculas->traerTodos();
            $listaGeneros = new\Daos\GenerosDao();
            $listadoC = $listaGeneros->traerTodos();
            
            require_once('Vistas/peliculas.php');
            
        }
        else if($usuarios->isUser($Dni)){
            echo ' Login User';

        }
    }
}

?>
