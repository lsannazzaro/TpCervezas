<?php namespace Daos;

interface IDAOS {

	public function insertar($nuevo);
	public function eliminar($id);
	public function eliminarT();
	public function buscarId($id);
	public function actualizar($id,$nombre,$descripcion,$precio);
	public function traerTodos();
	public function buscar($question);

}

?>