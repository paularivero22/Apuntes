<?php
    require 'DB.php';
    
    $db = DB::getInstance();
    $medicos = $db->getMedicos();
    
    foreach ($medicos as $medico) {
        echo $medico->toString() . "<br>";
    }
?>
    <a href="turnos.php">Ver Turnos</a>
    <a href="medicosFamilia.php">Consultar Médicos de Familia</a>
