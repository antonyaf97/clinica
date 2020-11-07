<?php

require_once "../controladores/paciente.controlador.php";
require_once "../modelos/paciente.modelo.php";

class AjaxPaciente{

	/*=============================================
	EDITAR PACIENTE
	=============================================*/	

	public $CuiPaciente;

	public function ajaxEditarPaciente(){

		$item = "id";
		$valor = $this->CuiPaciente;

		$respuesta = ControladorPaciente::ctrMostrarPaciente($item, $valor);

		echo json_encode($respuesta);


	}

}

/*=============================================
EDITAR PACIENTE
=============================================*/	

if(isset($_POST["CuiPaciente"])){

	$paciente = new AjaxPaciente();
	$paciente -> idCliente = $_POST["CuiPaciente"];
	$paciente -> ajaxEditarPaciente();

}