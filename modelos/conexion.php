<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=MYSQL5004.site4now.net;
						dbname=db_a68aa5_clinica",
			            "a68aa5_clinica",
			            "clinica1");

		$link ->exec("set name utf8");

		return $link;

	}


}