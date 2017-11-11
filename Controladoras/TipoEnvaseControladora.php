<?php namespace Controladoras;

class TipoEnvaseControladora{

	
	private $datosenvase ; // Variable de tipo Singleton. Una sola instancia del Daos 
  
   
    //Constructor. 
    function __construct(){

    	$this->datosenvase = \Daos\EnvasesDaos::getInstancia();
    	
    }

	
	public function vista(){

		require_once('Vistas/VistaEnvases.php');
	
	}


	public function gestionEnvases(){

		$this->VerEnvases();

	}

	public function Nuevo($nombre,$capacidad,$coeficiente){
		
		$Nuevo = new \Modelos\Envases($nombre,$capacidad,$coeficiente); //Creo un Objeto de tipo Envase
		$this->datosenvase->Insertar($Nuevo);
		$this->VerEnvases();
	
	}

	public function VerEnvases(){
		
		$listadoE = $this->datosenvase->traerTodos();
		require_once('Vistas/TiposEnvases.php');

	}

	public function borrarTodos(){

		$this->datosenvase->eliminarT();
		$this->VerEnvases();

	}

	
	public function Borrar($id){
		
		$this->datosenvase->eliminar($id);
		$this->VerEnvases();
	
	}
	

	public function Actualizar($id,$nombre,$capacidad,$coeficiente){

		$this->datosenvase->actualizar($id,$nombre,$capacidad,$coeficiente);
		$this->VerEnvases();

	}

	public function Modificar($id,$Nombre,$Capacidad,$Coeficiente){		
		
		include ('Vistas/ModificarEnvase.php');
	
	}

}

?>