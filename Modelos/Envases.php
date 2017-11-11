<?php namespace Modelos;

class Envases {

	private $id;
	private $nombre;
	private $capacidad;
	private $coeficiente;
	

	function __construct($nombre = '', $capacidad,$coeficiente)
	{
		
		$this->nombre = $nombre;
		$this->capacidad = $capacidad;
		$this->coeficiente = $coeficiente;
	}

//getters

    public function getId()	//devuelve el id de la cerveza
	{
		return $this->id;
	}
	public function getNombre()	//devuelve el nombre de la cerveza
	{
		return $this->nombre;
	}

	public function getCapacidad()
	{
		return $this->capacidad;
	}
	public function getCoeficiente()
	{
		return $this->coeficiente;
	}

//setters

	public function setId($id)	
	{
		$this->id = $id;
	}

	public function setNombre($nombre)	
	{
		$this->nombre = $nombre;
	}

	public function setCapacidad($capacidad)	
	{
		$this->capacidad = $capacidad;
	}
	
	public function setCoeficiente($coeficiente)	
	{
		$this->coeficiente = $coeficiente;
	}
}

?>