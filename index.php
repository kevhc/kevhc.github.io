<?php

require_once "controladores/plantilla.controlador.php";

/*===============================
Depurar errores
================================*/
ini_set("display_errors",1);
ini_set("log_errors",1);
ini_set("error_log","C:/xampp/htdocs/ecommerce2/web/php_error_log");

$index = new ControladorPlantilla();
$index -> index();