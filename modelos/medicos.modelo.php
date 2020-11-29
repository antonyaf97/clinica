<?php

require_once "conexion.php";

class ModeloMedico{

	/*=============================================
	CREAR MEDICO
	=============================================*/

	static public function mdlIngresarMedico($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla( Nombre, Apellido, Especialidad, NumeroColegiado, Cargo, Observaciones) VALUES ( :Nombre, :Apellido, :Especialidad, :NumeroColegiado, :Cargo, :Observaciones)");

		$stmt->bindParam(":Nombre", $datos["Nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":Apellido", $datos["Apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":Especialidad", $datos["Especialidad"], PDO::PARAM_STR);
		$stmt->bindParam(":NumeroColegiado", $datos["NumeroColegiado"], PDO::PARAM_INT);
		$stmt->bindParam(":Cargo", $datos["Cargo"], PDO::PARAM_STR);
		$stmt->bindParam(":Observaciones", $datos["Observaciones"], PDO::PARAM_STR);
		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR MEDICO
	=============================================*/

	static public function mdlMostrarMedico($tabla, $item, $valor){

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
	EDITAR MEDICO
	=============================================*/

	static public function mdlEditarMedico($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Nombre = :Nombre, Apellido = :Apellido, Especialidad = :Especialidad, NumeroColegiado = :NumeroColegiado, Cargo = :Cargo, Observaciones = :Observaciones   WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
	    $stmt->bindParam(":Nombre", $datos["Nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":Apellido", $datos["Apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":Especialidad", $datos["Especialidad"], PDO::PARAM_STR);
		$stmt->bindParam(":NumeroColegiado", $datos["NumeroColegiado"], PDO::PARAM_INT);
		$stmt->bindParam(":Cargo", $datos["Cargo"], PDO::PARAM_STR);
		$stmt->bindParam(":Observaciones", $datos["Observaciones"], PDO::PARAM_STR);
	    

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	ELIMINAR MEDICO
	=============================================*/

	static public function mdlEliminarMedico($tabla, $datos){

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
	ACTUALIZAR MEDICO
	=============================================*/

	static public function mdlActualizarMedico($tabla, $item1, $valor1, $valor){

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
