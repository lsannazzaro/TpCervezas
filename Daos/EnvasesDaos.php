<?php namespace Daos;

use \Daos\Conexion as Conexion;

class EnvasesDaos extends Conexion implements IDAOS{
	
	protected $tabla = "Envases";
	Private $ListaEnvases = array();

	function __construct(){

	}

	public function insertar($Objeto){

		$Nombre = $Objeto->getNombre();
		$Capacidad = $Objeto->getCapacidad();		
		$Coeficiente = $Objeto->getCoeficiente();
		$sql = "INSERT INTO $this->tabla  (Nombre, Capacidad ,Coeficiente)  VALUES ('$Nombre', '$Capacidad',$Coeficiente)";	
		echo $sql;
		$obj_pdo = new Conexion();
		$conexion = $obj_pdo->conectar();
		$sentencia = $conexion->prepare($sql);
		$sentencia->execute();
}




public function eliminar($id){

		$sql = "DELETE FROM " . $this->tabla . " WHERE IdTipo=" . $id;
		$obj_pdo = new Conexion();
		$conexion = $obj_pdo->conectar();
		$sentencia = $conexion->prepare($sql);
		$sentencia->execute();

		while ($row = $sentencia->fetch()) {
			$array[] = $row;
		}
		
		if(!empty($array)){
			//var_dump($array);
			foreach ($array as $key => $value) {
						$id = $value['IdTipo'];
						$nombre = $value['Nombre'];
						$Capacidad = $value['Capacidad'];
						$Coeficiente = $value['Coeficiente'];
						$Nuevos = new \Modelos\Cervezas($nombre,$Capacidad,$Coeficiente);
						$Nuevos->setId($id);
						//var_dump($Nuevos);
						array_push($this->ListaEnvases,$Nuevos);
						
					}return $this->ListaEnvases;}


		}


public function actualizar($id,$nombre,$Capacidad,$Coeficiente){

	
	$sql = "UPDATE " . $this->tabla . " SET Nombre= ' " . $nombre . " ', Capacidad=  '" . $Capacidad. " ', CoeficienteXLitro=" . $Coeficiente . " WHERE IdTipo=" . $id;
		//echo $sql;
		$obj_pdo = new Conexion();
		$conexion = $obj_pdo->conectar();
		$sentencia = $conexion->prepare($sql);
		$sentencia->execute();

		while ($row = $sentencia->fetch()) {
			$array[] = $row;
		}
		
		if(!empty($array)){
			//var_dump($array);
			foreach ($array as $key => $value) {
						$id = $value['IdTipo'];
						$nombre = $value['Nombre'];
						$Capacidad = $value['Capacidad'];
						$Coeficiente = $value['CoeficienteXLitro'];
						$Nuevos = new \Modelos\Cervezas($nombre,$Capacidad,$Coeficiente);
						$Nuevos->setId($id);
						//var_dump($Nuevos);
						array_push($this->ListaEnvases,$Nuevos);
						
					}return $this->ListaEnvases;}

}
public function eliminarT(){


}

public function traerTodos(){

		$sql = "SELECT * FROM " . $this->tabla;
		$obj_pdo = new Conexion();
		$conexion = $obj_pdo->conectar();
		$sentencia = $conexion->prepare($sql);
		$sentencia->execute();

		while ($row = $sentencia->fetch()) {
			$array[] = $row;
		}
		
		if(!empty($array)){
			//var_dump($array);
			foreach ($array as $key => $value) {
						$id = $value['IdTipo'];
						$nombre = $value['Nombre'];
						$Capacidad = $value['Capacidad'];
						$Coeficiente = $value['Coeficiente'];
						$Nuevos = new \Modelos\Cervezas($nombre,$Capacidad,$Coeficiente);
						$Nuevos->setId($id);
						//var_dump($Nuevos);
						array_push($this->ListaEnvases,$Nuevos);
						
					}return $this->ListaEnvases;}
	}


		public function buscar($nombre){

		$sql = "SELECT * FROM " . $this->tabla . " WHERE Nombre=" . $nombre;

		$obj_pdo = new Conexion();
		$conexion = $obj_pdo->conectar();
		$sentencia = $conexion->prepare($sql);
		$sentencia->execute();

			//var_dump($sentencia);
		while ($row = $sentencia->fetch()) {
			$array[] = $row;
		}

		
		if(!empty($array)){
			return $array;

		}
}

		public function buscarId($id){

		$sql = "SELECT * FROM " . $this->tabla . " WHERE IdTipo=" . $id;
		

        // creo el objeto conexion
		$obj_pdo = new Conexion();

			// Conecto a la base de datos.
		$conexion = $obj_pdo->conectar();

			// Creo una sentencia llamando a prepare. Esto devuelve un objeto statement
		$sentencia = $conexion->prepare($sql);

		echo $sql;
			// Ejecuto la sentencia.
		$sentencia->execute();
			var_dump($sentencia->execute());
		
		while ($row = $sentencia->fetch()) {
			$array[] = $row;
				//var_dump($row);
		}
		if(!empty($array)){
			foreach ($array as $key => $value) {
						$id = $value['IdTipo'];
						$nombre = $value['Nombre'];
						$Capacidad = $value['Capacidad'];
						$Coeficiente = $value['CoeficienteXLitro'];
						$Nuevos = new \Modelos\Cervezas($nombre,$Capacidad,$Coeficiente);
						$Nuevos->setId($id);
						//var_dump($Nuevos);
						array_push($this->ListaEnvases,$Nuevos);
						
					}return $this->ListaEnvases;}
		}

}

?>