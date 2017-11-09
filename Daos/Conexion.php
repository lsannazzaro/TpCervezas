<?php namespace daos;

define("DB_HOST","localhost");
define("DB_NAME","lea");
define("DB_USER","root");
define("DB_PASS","");

class Conexion extends Singleton {
    
        # Métodos
    
    public function conectar() {
        
       try {
        $baseDatos = new \PDO("mysql:host=" . DB_HOST . "; dbname=" . DB_NAME, DB_USER, DB_PASS);
    }
    catch (Exeption $e) {
        die('Error' . $e->GetMessage());
    }
    return $baseDatos;
}
}
?>