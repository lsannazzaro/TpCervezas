<?php namespace Modelos;

class Sucursales{
		
		private $idSucursal;
		private $nombre;
		private $ubicacion;
		private $foto;

public function __construct($nombre='',$ubicacion='', $foto = ''){

	


}

public function getId()
{
    return $this->idSucursal;
}

public function setId($idSucursal)
{
    $this->idSucursal = $idSucursal;
}

public function getNombre()
{
    return $this->nombre;
}

public function setNombre($nombre)
{
    $this->nombre = $nombre;
    return $this->nombre;
}

public function getUbicacion()
{
    return $this->ubicacion;
}

public function setUbicacion($ubicacion)
{
    $this->ubicacion = $ubicacion;
    return $this->ubicacion;
}

public function getFoto()
{
    return $this->foto;
}

public function setFoto($foto)
{
    $this->foto = $foto;
    return $this->$foto;
}

}


?>