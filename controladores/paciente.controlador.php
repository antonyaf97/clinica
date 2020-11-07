<?php

class ControladorPaciente{

	/*=============================================
	CREAR PACIENTE
	=============================================*/

	static public function ctrCrearPaciente(){

		if(isset($_POST["NuevoPaciente"])){

			if(preg_match('/^[0-9]+$/', $_POST["NuevoCui"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["NuevoNombre"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["NuevoApellido"]) &&
			   preg_match('/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$/', $_POST["NuevaFechaNacimiento"])&&
			   preg_match('/^|+[a-zA-Z0-9_]+$/', $_POST["NuevoTipodesangre"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["NuevoPadecimiento"])){

                $tabla = "paciente";

			   	$datos = array("CuiPaciente"=>$_POST["NuevoCui"],
			   		           "Nombre"=>$_POST["NuevoNombre"],
					           "Apellido"=>$_POST["NuevoApellido"],
					           "Fecha_Nacimiento"=>$_POST["NuevaFechaNacimiento"],
					           "Tipo_de_Sangre"=>$_POST["NuevoTipodesangre"],
					           "Padecimientos_Anteriores"=>$_POST["NuevoPadecimiento"]);


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

									window.location = "paciente";

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

							window.location = "paciente";

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

		$tabla = "paciente";

		$respuesta = ModeloPaciente::mdlMostrarPaciente($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR PACIENTE
	=============================================*/

	static public function ctrEditarPaciente(){

		if(isset($_POST["ctrEditarPaciente"])){

			if(preg_match('/^[0-9]+$/', $_POST["EditarCui"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["EditarNombre"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["EditarApellido"]) &&
			   preg_match('/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$/', $_POST["EditarFechaNacimiento"])&&
			   preg_match('/^|+[a-zA-Z0-9_]+$/', $_POST["EditarTipodesangre"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["EditarPadecimiento"])){
			   	
			   	$tabla = "paciente";

			   	$datos = array("CuiPaciente"=>$_POST["EditarCui"],
			   		           "Nombre"=>$_POST["EditarNombre"],
					           "Apellido"=>$_POST["EditarApellido"],
					           "Fecha_Nacimiento"=>$_POST["EditarFechaNacimiento"],
					           "Tipo_de_Sangre"=>$_POST["EditarTipodesangre"],
					           "Padecimientos_Anteriores"=>$_POST["EditarPadecimiento"]);


			   	$respuesta = ModeloPaciente::mdlEditarPaciente($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El paciente ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "paciente";

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

							window.location = "paciente";

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

		if(isset($_GET["CuiPaciente"])){

			$tabla ="paciente";
			$datos = $_GET["CuiPaciente"];

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

								window.location = "paciente";

								}
							})

				</script>';

			}		

		}

	}

}

