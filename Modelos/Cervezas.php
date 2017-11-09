<?php namespace Modelos;

class Cervezas{

	
	protected $id;
	protected $nombre;
    protected $descripcion;
	protected $precio;


	public function __construct($nombre = '', $descripcion = '', $precio =0)
	{	 
        $this->nombre = $nombre;
		$this->descripcion = $descripcion;
		$this->precio = $precio;
	}


	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
   
    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }


    public function setPrecio($precio){
        $this->precio=$precio;
    }

	public function getNombre()
	{
		return $this->nombre;
	}

	public function getDescripcion()
	{
		return $this->descripcion;
	}


    public function getPrecio()
	{
		return $this->precio;
	}

	
    

}