<?php
require_once 'Empleado.php';

// Crear un empleado
$empleado = new Empleado();
$empleado->actualizarInformacionPersonal("Juan Pérez", 30, "Calle Falsa 123");
$empleado->actualizarInformacionLaboral("E12345", 2500.00);

// Mostrar la información del empleado
$empleado->mostrarInformacion();
?>
