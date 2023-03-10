<?php 

class ControladorPlantilla{

	/*=============================================
	Traemos la vista principal de la plantilla
	=============================================*/

	public function index(){

		include "vistas/plantilla.php";

	}

	/*=============================================
	Ruta Principal o Dominio del sitio
	=============================================*/

	static public function path(){

		if(!empty($_SERVER["HTTPS"]) && ("on" == $_SERVER["HTTPS"])){

			return "https://".$_SERVER["SERVER_NAME"].":8080/";

		}else{

			return "http://".$_SERVER["SERVER_NAME"].":8080/";
		}

		return $_SERVER["SERVER_NAME"];
	}

}

