<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba ejercicio3</title>
</head>

<body>
    <?php
    include 'Medico.php';

    $medicos = [];

    $medicos[] = new Familia("Dr. Fernández", 45, "mañana", 200);
    $medicos[] = new Familia("Dra. López", 65, "tarde", 180);
    $medicos[] = new Familia("Dr. Gómez", 50, "tarde", 220);

    $medicos[] = new Urgencia("Dr. Martínez", 70, "tarde", "Cardiología");
    $medicos[] = new Urgencia("Dra. Sánchez", 55, "mañana", "Pediatría");
    $medicos[] = new Urgencia("Dr. Ramírez", 62, "tarde", "Traumatología");

    echo "<h1>Datos de todos los médicos:</h1>";
    foreach ($medicos as $medico) {
        $medico->mostrar();
    }

    $medicosTardeMayor60 = 0;
    foreach ($medicos as $medico) {
        if ($medico instanceof Urgencia && $medico->getTurno() === "tarde" && $medico->getEdad() > 60) {
            $medicosTardeMayor60++;
        }
    }
    echo "<h2>Número de médicos de urgencias de turno de tarde con más de 60 años: $medicosTardeMayor60</h2>";

    echo "<h1>Médicos de familia con número de pacientes igual o superior a 200:</h1>";
    foreach ($medicos as $medico) {
        if ($medico instanceof Familia && $medico->getNumPacientes() >= 200) {
            $medico->mostrar();
        }
    }
    ?>
</body>

</html>