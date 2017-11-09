<?php namespace Daos;

class Singleton{
	
	private static $instancia = array();


	public static function getInstancia(){
			
			
			//echo "Estoy en Singleton";
			
			$returnsvalue = null;
			$class = get_called_class();
			//ECHO $class;
			if (!isset(self::$instancia['$class'])) {
			 	
			 	self::$instancia['$class'] = new $class;
			 	$returnsvalue = self::$instancia['$class'];
			 } 

		return $returnsvalue;
		
		}


}

?>