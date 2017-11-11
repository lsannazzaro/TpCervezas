<?php namespace Daos;

use \Daos\Conexion as Conexion;

class EnvasesDaos extends Conexion implements IDAOS{
	
	
	
	protected $tabla = "Envases";
	Private $ListaEnvases = array();

	

	public function mapear($array){

		$envases = is_array($array) ? $array : [];
		
		$this->ListaEnvases = array_map(function($p){
			
			$Uno = new \Modelos\Envases($p['Nombre'],$p['Capacidad'],$p['Coeficiente']);
			$Uno->setId($p['IdTipo']);
			return $Uno;
		}, $envases);
	}	

	
	public function consulta($consulta){

		$obj_pdo = new Conexion();
		$conexion = $obj_pdo->conectar();
		$sentencia = $conexion->prepare($consulta);
		$sentencia->execute();

		while ($row = $sentencia->fetch()) {
				
				$array[] = $row;
		}
		
		if(!empty($array)){
				
				$this->mapear($array);

		}

	}


	public function insertar($Objeto){

		$Nombre = $Objeto->getNombre();
		$Capacidad = $Objeto->getCapacidad();		
		$Coeficiente = $Objeto->getCoeficiente();
		
		$sql = "INSERT INTO $this->tabla (Nombre, Capacidad ,Coeficiente) VALUES ('$Nombre', $Capacidad,$Coeficiente)";

		$this->consulta($sql);		
		
	}



	public function eliminar($id){

		$sql = "DELETE FROM " . $this->tabla . " WHERE IdTipo=" . $id;
		$this->consulta($sql);

	}
		

	public function actualizar($id,$nombre,$Capacidad,$Coeficiente){

		$sql = "UPDATE " . $this->tabla . " SET Nombre= ' " . $nombre . " ', Capacidad=  " . $Capacidad. " , Coeficiente=" . $Coeficiente . " WHERE IdTipo=" . $id;
		$this->consulta($sql);
		return $this->ListaEnvases;

	}



	public function eliminarT(){


	}


	public function traerTodos() {

		// Guardo como string la consulta sql
		$sql = "SELECT * FROM " . $this->tabla;
		$this->consulta($sql);
		return $this->ListaEnvases;

	}



	public function buscar($nombre){

		$sql = "SELECT * FROM " . $this->tabla . " WHERE Nombre=" . $nombre;
		$this->consulta($sql);

	}
	

	public function buscarId($id){

		$sql = "SELECT * FROM " . $this->tabla . " WHERE IdTipo=" . $id;
		$this->consulta($sql);

	}

}

?>