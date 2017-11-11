<?php namespace Controladoras;

class TipoCervezaControladora{
    
    private $datoscerveza ;
  
   
    function __construct(){

    	//$this->datoscerveza = \Daos\ListaCerveza::getInstancia();// DEfine el daos
    	$this->datoscerveza = \Daos\CervezasDaos::getInstancia();
    	
    }

	public function vista(){

    	require_once ('Vistas/VistaCervezas.php');
    }

    public function inicio(){

    	require_once ('Vistas/Index.php');
    	
    }


	public function login(){
		
		//$listadoC = $this->datoscerveza->traerTodos();
		//var_dump($listadoC);
		require_once ('Vistas/Login.php');

	}

	public function Nuevo($nombre,$descripcion,$precio){
		
		$Nuevo = new \Modelos\Cervezas($nombre,$descripcion,$precio); //Creo un Objeto de tipo Cerveza
		$this->datoscerveza->Insertar($Nuevo);
		$listadoC = $this->datoscerveza->traerTodos();
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