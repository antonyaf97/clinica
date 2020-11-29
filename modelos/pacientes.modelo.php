<?php

require_once "conexion.php";

class ModeloPaciente{

	/*=============================================
	CREAR PACIENTE
	=============================================*/

	static public function mdlIngresarPaciente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Documento, Nombre, Apellido, Fecha_Nacimiento, Tipo_de_Sangre, Padecimientos_Anteriores) VALUES (:Documento, :Nombre, :Apellido, :Fecha_Nacimiento, :Tipo_de_Sangre, :Padecimientos_Anteriores)");

		$stmt->bindParam(":Documento", $datos["Documento"], PDO::PARAM_INT);
		$stmt->bindParam(":Nombre", $datos["Nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":Apellido", $datos["Apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":Fecha_Nacimiento", $datos["Fecha_Nacimiento"], PDO::PARAM_STR);
		$stmt->bindParam(":Tipo_de_Sangre", $datos["Tipo_de_Sangre"], PDO::PARAM_STR);
		$stmt->bindParam(":Padecimientos_Anteriores", $datos["Padecimientos_Anteriores"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR PACIENTE
	=============================================*/

	static public function mdlMostrarPaciente($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	EDITAR PACIENTE
	=============================================*/

	static public function mdlEditarPaciente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Documento = :Documento, Nombre = :Nombre, Apellido = :Apellido, Fecha_Nacimiento = :Fecha_Nacimiento, Tipo_de_Sangre = :Tipo_de_Sangre, Padecimientos_Anteriores = :Padecimientos_Anteriores WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
	    $stmt->bindParam(":Documento", $datos["Documento"], PDO::PARAM_INT);
		$stmt->bindParam(":Nombre", $datos["Nombre"], PDO::PARAM_STR);
	    $stmt->bindParam(":Apellido", $datos["Apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":Fecha_Nacimiento", $datos["Fecha_Nacimiento"], PDO::PARAM_STR);
		$stmt->bindParam(":Tipo_de_Sangre", $datos["Tipo_de_Sangre"], PDO::PARAM_STR);
		$stmt->bindParam(":Padecimientos_Anteriores", $datos["Padecimientos_Anteriores"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	ELIMINAR PACIENTE
	=============================================*/

	static public function mdlEliminarPaciente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR PACIENTE
	=============================================*/

	static public function mdlActualizarPaciente($tabla, $item1, $valor1, $valor){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE id = :id");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":id", $valor, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

}
