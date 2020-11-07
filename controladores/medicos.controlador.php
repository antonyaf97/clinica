<?php

class ControladorMedico{

	/*=============================================
	CREAR MEDICO
	=============================================*/

	static public function ctrCrearMedico(){

		if(isset($_POST["nuevoNombre"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoApellido"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoEspecialidad"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nuevoNumeroColegiado"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCargo"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoObservaciones"])){ 
			   

			   	$tabla = "medicos"; 

			   	$datos = array("Nombre"=>$_POST["nuevoNombre"],
			   		           "Apellido"=>$_POST["nuevoApellido"],
			   		           "Especialidad"=>$_POST["nuevoEspecialidad"],
			   		           "NumeroColegiado"=>$_POST["nuevoNumeroColegiado"],
					           "Cargo"=>$_POST["nuevoCargo"],
                               "Observaciones"=>$_POST["nuevoObservaciones"]);

			   	$respuesta = ModeloMedico::mdlIngresarMedico($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El medico ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "medicos";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El medico no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "medicos";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	MOSTRAR MEDICO
	=============================================*/

	static public function ctrMostrarMedico($item, $valor){

		$tabla = "medicos";

		$respuesta = ModeloMedico::mdlMostrarMedico($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR 	MEDICO
	=============================================*/

	static public function ctrEditarMedico(){

		if(isset($_POST["editarNombre"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarApellido"]) &&	
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarEspecialidad"]) &&
			   preg_match('/^[0-9]+$/', $_POST["editarNumeroColegiado"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCargo"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarObservaciones"])){

			   	$tabla = "medicos";

			   	$datos = array("id"=>$_POST["idMedico"],
			   		           "Nombre"=>$_POST["editarNombre"],
			   		           "Apellido"=>$_POST["editarApellido"],
			   		           "Especialidad"=>$_POST["editarEspecialidad"],
			   				   "NumeroColegiado"=>$_POST["editarNumeroColegiado"],
			   				   "Cargo"=>$_POST["editarCargo"],
					           "Observaciones"=>$_POST["editarObservaciones"]);

			   	$respuesta = ModeloMedico::mdlEditarMedico($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Medico ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "medicos";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡EL medico no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "medicos";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	ELIMINAR MEDICO
	=============================================*/

	static public function ctrEliminarMedico(){

		if(isset($_GET["idMedico"])){

			$tabla ="medicos";
			$datos = $_GET["idMedico"];

			$respuesta = ModeloMedico::mdlEliminarMedico($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El medico ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "medicos";

								}
							})

				</script>';

			}		

		}

	}

}

