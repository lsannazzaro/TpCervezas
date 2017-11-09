<?php namespace Modelos;

class Producto {

	private $id;
	private $nombre;

	function __construct($id = '', $nombre = '')
	{
		$this->id = $id;
		$this->nombre = $nombre; 

	}

//getters

	public function getId()	//devuelve el id de la cerveza
	{
		return $this->id;
	}

	public function getNombre()
	{
		return $this->nombre;
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
}

?>