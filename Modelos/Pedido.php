<?php namespace Modelos;

class Pedido {

	private $id;
	private $fecha;
	private $cliente;
	private $cuenta;

	function __construct($id = '', $fecha = '',$fecha = ''$fecha = '')
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