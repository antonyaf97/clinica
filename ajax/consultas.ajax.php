<?php

require_once "../controladores/consultas.controlador.php";
require_once "../modelos/consultas.modelo.php";

class AjaxConsulta{

	/*=============================================
	EDITAR CONSULTA
	=============================================*/	

	public $idConsulta;

	public function ajaxEditarConsulta(){

		$item = "id";
		$valor = $this->idConsulta;

		$respuesta = ControladorConsulta::ctrMostrarConsulta($item, $valor);

		echo json_encode($respuesta);


	}

}

/*=============================================
EDITAR CONSULTA
=============================================*/	

if(isset($_POST["idConsulta"])){

	$editar = new AjaxConsulta();
	$editar -> idConsulta = $_POST["idConsulta"];
	$editar -> ajaxEditarConsulta();

}