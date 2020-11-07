<?php

require_once "../controladores/medicos.controlador.php";
require_once "../modelos/medicos.modelo.php";

class AjaxMedico{

	/*=============================================
	EDITAR CONSULTA
	=============================================*/	

	public $idMedico;

	public function ajaxEditarMedico(){

		$item = "id";
		$valor = $this->idMedico;

		$respuesta = ControladorMedico::ctrMostrarMedico($item, $valor);

		echo json_encode($respuesta);


	}

}

/*=============================================
EDITAR CONSULTA
=============================================*/	

if(isset($_POST["idMedico"])){

	$editar = new AjaxMedico();
	$editar -> idMedico = $_POST["idMedico"];
	$editar -> ajaxEditarMedico();

}