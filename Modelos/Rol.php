<?php namespace Modelos;


class Rol
{
	private $tipo;			//Tipo de Rol que tendra la cuenta de usuario.

	//Constructor
	public function __construct($tipo = '')
	{
		$this->setTipo($tipo);
	}

	//Getters
	public function getTipo()
	{
		return $this->tipo;
	}

	//Setters
	public function setTipo($tipo)
	{
		$this->tipo = (string)$tipo;
	}

}
?>