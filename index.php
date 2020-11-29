<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/pacientes.controlador.php";
require_once "controladores/consultas.controlador.php";
require_once "controladores/medicos.controlador.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/pacientes.modelo.php";
require_once "modelos/consultas.modelo.php";
require_once "modelos/medicos.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
