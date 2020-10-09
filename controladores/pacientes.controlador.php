<?php

class ControladorPaciente{

	/*=============================================
	CREAR PACIENTE
	=============================================*/

	static public function ctrCrearPaciente(){

		if(isset($_POST["nuevoDocumento"])){

			if(preg_match('/^[0-9]+$/', $_POST["nuevoDocumento"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoPaciente"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoApellido"]) && 
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoTipodesangre"]) && 
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoPadecimiento"])){

			   	$tabla = "pacientes"; 

			   	$datos = array("Documento"=>$_POST["nuevoDocumento"],
			   		           "Nombre"=>$_POST["nuevoPaciente"],
					           "Apellido"=>$_POST["nuevoApellido"],
					           "Fecha_Nacimiento"=>$_POST["nuevoFechaNacimiento"],
					           "Tipo_de_Sangre"=>$_POST["nuevoTipodesangre"],
					           "Padecimientos_Anteriores"=>$_POST["nuevoPadecimiento"]);
					           

			   	$respuesta = ModeloPaciente::mdlIngresarPaciente($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El paciente ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "pacientes";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El paciente no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "pacientes";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	MOSTRAR PACIENTE
	=============================================*/

	static public function ctrMostrarPaciente($item, $valor){

		$tabla = "pacientes";

		$respuesta = ModeloPaciente::mdlMostrarPaciente($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR PACIENTE
	=============================================*/

	static public function ctrEditarPaciente(){

		if(isset($_POST["editarDocumento"])){

			if(preg_match('/^[0-9]+$/', $_POST["editarDocumento"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarPaciente"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarApellido"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarTipodesangre"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarPadecimiento"])){

			   	$tabla = "pacientes";

			   	$datos = array("id"=>$_POST["idPaciente"],
			   		           "Documento"=>$_POST["editarDocumento"],
			   				   "Nombre"=>$_POST["editarPaciente"],
					           "Apellido"=>$_POST["editarApellido"],
					           "Fecha_Nacimiento"=>$_POST["editarFechaNacimiento"],
					           "Tipo_de_Sangre"=>$_POST["editarTipodesangre"],
					           "Padecimientos_Anteriores"=>$_POST["editarPadecimiento"]);

			   	$respuesta = ModeloPaciente::mdlEditarPaciente($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El cliente ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "pacientes";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El paciente no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "pacientes";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	ELIMINAR PACIENTE
	=============================================*/

	static public function ctrEliminarPaciente(){

		if(isset($_GET["idPaciente"])){

			$tabla ="pacientes";
			$datos = $_GET["idPaciente"];

			$respuesta = ModeloPaciente::mdlEliminarPaciente($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El paciente ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "pacientes";

								}
							})

				</script>';

			}		

		}

	}

}

