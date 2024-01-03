<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/personal.controlador.php";
require_once "controladores/distritos.controlador.php";
require_once "controladores/provincias.controlador.php";
require_once "controladores/cantones.controlador.php";
require_once "controladores/circuitos.controlador.php";
require_once "controladores/subcircuitos.controlador.php";
require_once "controladores/flota-vehicular.controlador.php";
require_once "controladores/personal-subcircuito.controlador.php";
require_once "controladores/vehiculo-subcircuito.controlador.php";
require_once "controladores/mantenimiento-vehicular.controlador.php";
require_once "controladores/parte-policial.controlador.php";
require_once "controladores/orden-trabajo.controlador.php";
require_once "controladores/rango-policial.controlador.php";
require_once "controladores/tipo-vehiculo.controlador.php";
require_once "controladores/tipo-mantenimiento.controlador.php";
require_once "controladores/reportes.controlador.php";


require_once "modelos/usuarios.modelo.php";
require_once "modelos/personal.modelo.php";
require_once "modelos/distritos.modelo.php";
require_once "modelos/provincias.modelo.php";
require_once "modelos/cantones.modelo.php";
require_once "modelos/circuitos.modelo.php";
require_once "modelos/subcircuitos.modelo.php";
require_once "modelos/flota-vehicular.modelo.php";
require_once "modelos/personal-subcircuito.modelo.php";
require_once "modelos/vehiculo-subcircuito.modelo.php";
require_once "modelos/mantenimiento-vehicular.modelo.php";
require_once "modelos/parte-policial.modelo.php";
require_once "modelos/orden-trabajo.modelo.php";
require_once "modelos/rango-policial.modelo.php";
require_once "modelos/tipo-vehiculo.modelo.php";
require_once "modelos/tipo-mantenimiento.modelo.php";
require_once "modelos/reportes.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();