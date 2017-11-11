<?php namespace Daos;

class UsuariosDaos extends Singleton {

	protected $tabla = "Usuarios";
	protected $listado;

	protected function mapear($gente)
	{
		$gente = is_array($gente) ? $gente : [];
		$this->listado = array_map(function($p){
			return new \Modelos\Usuario(isset($p['dni']), isset($p['pass']), isset($p['rol']));
		}, $gente);
	}

	public function traerUno($value) {
		
		$sql = "SELECT * FROM " . $this->tabla . " WHERE Email =" . "'".$value."'";
		//echo $sql;

            // creo el objeto conexion
		$obj_pdo = new Conexion();

			// Conecto a la base de datos.
		$conexion = $obj_pdo->conectar();

			// Creo una sentencia llamando a prepare. Esto devuelve un objeto statement
		$sentencia = $conexion->prepare($sql);

			// Ejecuto la sentencia.
		$sentencia->execute();
			//var_dump($sentencia->execute());
		
		while ($row = $sentencia->fetch()) {
			$array[] = $row;
				//var_dump($row);
		}
		if(!empty($array)){

			
		
			 $_SESSION['Usuario'] = $array;
		
			return $array;

		}

	}
	public function isValid($Email, $Pass){
		
		$sql = "SELECT * FROM Usuarios WHERE Email = " . "'". $Email . "'". " and Pass = " . "'" .$Pass ."'";
			

            // creo el objeto conexion
		$obj_pdo = new Conexion();

			// Conecto a la base de datos.
		$conexion = $obj_pdo->conectar();

			// Creo una sentencia llamando a prepare. Esto devuelve un objeto statement
		$sentencia = $conexion->prepare($sql);
			//var_dump($sentencia);

			// Ejecuto la sentencia.
		$sentencia->execute();
		while ($row = $sentencia->fetch()) {
			$array[] = $row;
		}
		if(!empty($array)){
			var_dump($array);
			return $array;

		}
	}

	public function isAdmin($Email){
		$sql = "SELECT * FROM ". $this->tabla. " WHERE Email = " . "'" .$Email. "'"." and Rol = 'admin'";
			//$sql = "SELECT Rol FROM " . $this->tabla . " WHERE Dni=" . $Dni;
                var_dump($sql);

            // creo el objeto conexion
		$obj_pdo = new Conexion();

			// Conecto a la base de datos.
		$conexion = $obj_pdo->conectar();

			// Creo una sentencia llamando a prepare. Esto devuelve un objeto statement
		$sentencia = $conexion->prepare($sql);
			//var_dump($sentencia);

			// Ejecuto la sentencia.
		$sentencia->execute();
		while ($row = $sentencia->fetch()) {
			$array[] = $row;
		}
		if(!empty($array)){

			return $array;
		}
	}

	public function isUser($Email){
		
		$sql = "SELECT * FROM ". $this->tabla. " WHERE Email = " . "'" .$Email. "'"." and Rol = 'usuario'";
			//$sql = "SELECT Rol FROM " . $this->tabla . " WHERE Dni=" . $Dni;
                var_dump($sql);

            // creo el objeto conexion
		$obj_pdo = new Conexion();

			// Conecto a la base de datos.
		$conexion = $obj_pdo->conectar();

			// Creo una sentencia llamando a prepare. Esto devuelve un objeto statement
		$sentencia = $conexion->prepare($sql);
			//var_dump($sentencia);

			// Ejecuto la sentencia.
		$sentencia->execute();
		while ($row = $sentencia->fetch()) {
			$array[] = $row;
		}
		if(!empty($array)){
			return $array;
		}
	}

}

?>