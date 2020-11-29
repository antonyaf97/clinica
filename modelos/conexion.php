<?php

class Conexion{

	static public function conectar(){

		
		$link = new PDO("mysql:host=MYSQL5030.site4now.net;
						dbname=db_a6a122_clinica",
			            "a6a122_clinica",
			            "clinica001");

		$link ->exec("set name utf8");

		return $link;

	}


}
