<?php

class ControladorConsulta{

	/*=============================================
	CREAR CONSULTA
	=============================================*/

	static public function ctrCrearConsulta(){

		if(isset($_POST["nuevoDiagnostico"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoDiagnostico"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoMedicamento"])){ 
			   

			   	$tabla = "consultas"; 

			   	$datos = array("idPaciente"=>$_POST["nuevoPaciente"],
			   		           "Diagnostico"=>$_POST["nuevoDiagnostico"],
					           "Medicamento"=>$_POST["nuevoMedicamento"]);

			   	$respuesta = ModeloConsulta::mdlIngresarConsulta($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La consulta ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "consultas";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La consulta no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "consultas";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	MOSTRAR CONSULTA
	=============================================*/

	static public function ctrMostrarConsulta($item, $valor){

		$tabla = "consultas";

		$respuesta = ModeloConsulta::mdlMostrarConsulta($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR 	CONSULTA
	=============================================*/

	static public function ctrEditarConsulta(){

		if(isset($_POST["editarDocumento"])){

			if(
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarDiagnostico"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarMedicamento"])){

			   	$tabla = "consultas";

			   	$datos = array("id"=>$_POST["idConsulta"],
			   		           "idPaciente"=>$_POST["editarPaciente"],
			   				   "Diagnostico"=>$_POST["editarDiagnostico"],
					           "Medicamento"=>$_POST["editarMedicamento"]);

			   	$respuesta = ModeloConsulta::mdlEditarConsulta($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La consulta ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "consultas";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La consulta no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "consultas";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	ELIMINAR CONSULTA
	=============================================*/

	static public function ctrEliminarConsulta(){

		if(isset($_GET["idConsulta"])){

			$tabla ="consultas";
			$datos = $_GET["idConsulta"];

			$respuesta = ModeloConsulta::mdlEliminarConsulta($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "La consulta ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "consultas";

								}
							})

				</script>';

			}		

		}

	}

}

