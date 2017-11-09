<?php namespace Modelos;

class LineaPedido {

	private $id;
	private $descripcion;
	private $cantidad;
	private $importe;

	function __construct($id = '', $descripcion = '',$cantidad = '',$importe = '')
	{
		$this->id = $id;
		$this->descripcion = $descripcion;
		$this->cantidad = $cantidad;
		$this->importe = $importe; 

	}

//getters

	public function getId()	//devuelve el id de la cerveza
	{
		return $this->id;
	}
	public function getDescripcion()
	{
		return $this->descripcion;
	}
	public function getCantidad()
	{
		return $this->cantidad;
	}
	public function getImporte()
	{
		return $this->importe;
	}

//setters

	public function setId($id)	
	{
		$this->id = $id;
	}
	public function setDescripcion($descripcion)	
	{
		$this->descripcion = $descripcion;
	}
	public function setCantidad($cantidad)	
	{
		$this->cantidad = $cantidad;
	}
	public function setImporte($importe)	
	{
		$this->importe = $importe;
	}

}

?>