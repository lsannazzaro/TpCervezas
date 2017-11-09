<?php namespace Daos;

use \Daos\Conexion as Conexion;

class CervezasDaos extends Conexion implements IDAOS{
	
	protected $tabla = "Cervezas";
	Private $ListaCervezas = array();

	function __construct(){

		// if(isset($_SESSION['ListaCervezas']))
		// {
		// 	$this->ListaCerveza = $_SESSION['ListaCervezas'];
		// }
		
	}

	public function insertar($Objeto){

		$Nombre = $Objeto->getNombre();
		$Descripcion= $Objeto->getDescripcion();		
		$PrecioLitro = $Objeto->getPrecio();
		$sql = "INSERT INTO $this->tabla  (Nombre, Descripcion,PrecioXLitro)  VALUES ('$Nombre', '$Descripcion',$PrecioLitro)";	
		//echo $sql;
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
						$descripcion = $value['Descripcion'];
						$precio = $value['PrecioXLitro'];
						$Nuevos = new \Modelos\Cervezas($nombre,$descripcion,$precio);
						$Nuevos->setId($id);
						//var_dump($Nuevos);
						array_push($this->ListaCervezas,$Nuevos);
						
					}return $this->ListaCervezas;}


		}


public function actualizar($id,$nombre,$descripcion,$precio){

	
	$sql = "UPDATE " . $this->tabla . " SET Nombre= ' " . $nombre . " ', Descripcion=  '" . $descripcion. " ', PrecioXLitro=" . $precio . " WHERE IdTipo=" . $id;
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
						$descripcion = $value['Descripcion'];
						$precio = $value['PrecioXLitro'];
						$Nuevos = new \Modelos\Cervezas($nombre,$descripcion,$precio);
						$Nuevos->setId($id);
						//var_dump($Nuevos);
						array_push($this->ListaCervezas,$Nuevos);
						
					}return $this->ListaCervezas;}

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
						$descripcion = $value['Descripcion'];
						$precio = $value['PrecioXLitro'];
						$Nuevos = new \Modelos\Cervezas($nombre,$descripcion,$precio);
						$Nuevos->setId($id);
						//var_dump($Nuevos);
						array_push($this->ListaCervezas,$Nuevos);
						
					}return $this->ListaCervezas;}
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
						$descripcion = $value['Descripcion'];
						$precio = $value['PrecioXLitro'];
						$Nuevos = new \Modelos\Cervezas($nombre,$descripcion,$precio);
						$Nuevos->setId($id);
						//var_dump($Nuevos);
						array_push($this->ListaCervezas,$Nuevos);
						
					}return $this->ListaCervezas;}
		}

}

?>