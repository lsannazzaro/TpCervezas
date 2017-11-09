<?php
//include ('Modelos/Cervezas.php');

define('ROOT', __DIR__ . "/");
define('FRONT_ROOT', '');
define('FRONT', '/');


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "Config/Autoload.php";


Config\Autoload::iniciar();

$request = new Config\Request();

session_start();
require_once ('Vistas/header.php');
require_once ('Vistas/nav.php');
//include ('Modelos/Cervezas.php');
$router = Config\Router::direccionar($request);
require_once ('Vistas/footer.php');


?>