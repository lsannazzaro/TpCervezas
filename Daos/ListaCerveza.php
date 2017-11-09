<?php namespace Daos;


class ListaCerveza extends Singleton implements IDAOS {

Private $ListaCerveza = array();

function __construct(){

		if(isset($_SESSION['ListaCervezas']))
		{
			$this->ListaCerveza = $_SESSION['ListaCervezas'];
		}
		
	}

public function insertar($Objeto){

		
		$id = count($this->ListaCerveza);

		//var_dump($id);

		if($id==0)
		
		{
			$Objeto->setId(1);
			array_push($this->ListaCerveza,$Objeto);
			$_SESSION['ListaCervezas'] = $this->ListaCerveza;
			//echo "aca";
		
		}else{

				foreach ($this->ListaCerveza as $key => $value) 
				{

					if($this->ListaCerveza[$key]->getNombre()==$Objeto->getNombre())
					{
					
						$esta = 1; 
						break;
					
					}else{

						$esta=0;

					}
				}
					if($esta) {
					echo "Este producto ya existe";
					//var_dump($id);
					}else{
					$idu = end($this->ListaCerveza);
					$next = $idu->getId();
					//var_dump($idu);
					$Objeto->setId($next+1);
					array_push($this->ListaCerveza,$Objeto);
					$_SESSION['ListaCervezas'] = $this->ListaCerveza;
				}

				
			}	
			
}


public function eliminarT(){

	session_destroy();
}

public function eliminar($id){

	unset($this->ListaCerveza[$id-1]);

	$_SESSION['ListaCervezas'] = $this->ListaCerveza;
}


public function actualizar($id,$nombre,$descripcion,$precio){

	foreach ($this->ListaCerveza as $key => $value) {
		 
			if($this->ListaCerveza[$key]->getId()==$id){
				$this->ListaCerveza[$key]->setNombre($nombre);
				$this->ListaCerveza[$key]->setDescripcion($descripcion);
				$this->ListaCerveza[$key]->setPrecio($precio);
			}
		}

	$_SESSION['ListaCervezas'] = $this->ListaCerveza;
}


public function traerTodos(){

	//var_dump($this->ListaCerveza);
	return $this->ListaCerveza;

}

public function buscar($dato){}


public function buscarId($id){}





}