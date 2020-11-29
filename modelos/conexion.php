<?php

class Conexion{

	static public function conectar(){

		
		$link = new PDO("mysql://rr08lv87rc64t5ri:mhd1y63345czzy05@r1bsyfx4gbowdsis.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/lw08u1soapoi7x6j;
						dbname=lw08u1soapoi7x6j",
			            "rr08lv87rc64t5ri",
			            "mhd1y63345czzy05");

		$link ->exec("set name utf8");

		return $link;

	}


}
