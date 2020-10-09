<?php

require_once "conexion.php";

class ModeloConsulta{

	/*=============================================
	CREAR CONSULTA
	=============================================*/

	static public function mdlIngresarConsulta($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(idPaciente, Diagnostico, Medicamento) VALUES (:idPaciente, :Diagnostico, :Medicamento");

        $stmt->bindParam(":idPaciente", $datos["idPaciente"], PDO::PARAM_STR);
		$stmt->bindParam(":Diagnostico", $datos["Diagnostico"], PDO::PARAM_STR);
		$stmt->bindParam(":Medicamento", $datos["Medicamento"], PDO::PARAM_STR);
		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR CONSULTA
	=============================================*/

	static public function mdlMostrarConsulta($tabla, $item, $valor){

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
	EDITAR CONSULTA
	=============================================*/

	static public function mdlEditarConsulta($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Diagnostico = :Diagnostico, Medicamento = :Medicamento  WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":idPaciente", $datos["idPaciente"], PDO::PARAM_INT);
	    $stmt->bindParam(":Diagnostico", $datos["Diagnostico"], PDO::PARAM_STR);
		$stmt->bindParam(":Medicamento", $datos["Medicamento"], PDO::PARAM_STR);
	    

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	ELIMINAR CONSULTA
	=============================================*/

	static public function mdlEliminarConsulta($tabla, $datos){

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
	ACTUALIZAR CONSULTA
	=============================================*/

	static public function mdlActualizarConsulta($tabla, $item1, $valor1, $valor){

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