<?php

require_once "../controladores/pacientes.controlador.php";
require_once "../modelos/pacientes.modelo.php";

class AjaxPaciente{

	/*=============================================
	EDITAR PACIENTE
	=============================================*/	

	public $idPaciente;

	public function ajaxEditarPaciente(){

		$item = "id";
		$valor = $this->idPaciente;

		$respuesta = ControladorPaciente::ctrMostrarPaciente($item, $valor);

		echo json_encode($respuesta);


	}

}

/*=============================================
EDITAR PACIENTE
=============================================*/	

if(isset($_POST["idPaciente"])){

	$editar = new AjaxPaciente();
	$editar -> idPaciente = $_POST["idPaciente"];
	$editar -> ajaxEditarPaciente();

}
