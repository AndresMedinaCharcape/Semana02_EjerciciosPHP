<?php

require_once "Empleado.php";
$objeto = new Empleado;

$empleado = $_POST['empleado'];
$sueldo = $_POST['sueldo'];

$objeto->InicializarDatos($empleado,$sueldo);
$objeto->MostrarDatos();



?>