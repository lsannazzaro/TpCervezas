<?php namespace Controladoras;

class TipoEnvaseControladora{

	private $datosenvase ;
  
   
    function __construct(){

    	$this->datosenvase = \Daos\EnvasesDaos::getInstancia();
    	
    }

public function gestionEnvases(){

	$listadoE = $this->datosenvase->traerTodos();
	require_once ('Vistas/TiposEnvases.php');

}

public function Nuevo($nombre,$capacidad,$coeficiente){
		
		$Nuevo = new \Modelos\Envases($nombre,$capacidad,$coeficiente); //Creo un Objeto de tipo Cerveza
		$this->datosenvase->Insertar($Nuevo);
		$listadoE = $this->datosenvase->traerTodos();
		//$_SESSION["ListaCerveza"] = $ListaCerveza;
		

		require_once('Vistas/TiposCervezas.php');
	
	}

	public function VerCervezas(){
		
		 //$ListaCerveza1  = new \Daos\CervezasDaos();
		$listadoC = $this->datoscerveza->traerTodos();
		 //var_dump($listadoC);
		 //var_dump($this->datoscerveza);
		 require_once('Vistas/TiposCervezasTabla.php');
	}

	public function borrarTodos(){

		$this->datoscerveza->eliminarT();
		$listadoC = $this->datoscerveza->traerTodos();
		include ('Vistas/TiposCervezas.php');

	}

	public function Borrar($id){
		
		
		$this->datoscerveza->eliminar($id);
		$listadoC = $this->datoscerveza->traerTodos();
		include ('Vistas/TiposCervezas.php');
	}
	

	public function Actualizar($id,$nombre,$descripcion,$precio){

		$this->datoscerveza->actualizar($id,$nombre,$descripcion,$precio);
		$listadoC = $this->datoscerveza->traerTodos();
		require_once ('Vistas/TiposCervezas.php');

	}

	public function Modificar($id,$nombre,$descripcion,$precio){

		
		
		include ('Vistas/ModificarCerveza.php');
	
	}

	public function dameLista(){
		return $this->ListaCerveza;
	}
}



?>