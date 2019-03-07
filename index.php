<?php
/* SE MANDAN A LLAMAR LOS CONTROLADORES*/
require_once "controllers/plantilla.controlador.php";
/*SE CREA LA VARIABLE DONDE CARGA LA CLASE DE CONTROLADOR */
$plantilla = new controladorPlantilla();
/* SE EJECUTA EL MEOTDO*/
$plantilla -> ctrPlantilla();