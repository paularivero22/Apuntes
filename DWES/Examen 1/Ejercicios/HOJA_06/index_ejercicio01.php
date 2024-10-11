<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba ejercicio1</title>
</head>

<body>
    <?php
    // Incluir las clases necesarias
    require_once 'ElementoVolador.php';
    require_once 'Avion.php';
    require_once 'Helicoptero.php';
    require_once 'Aeropuerto.php';

    // 1. Crea un objeto de tipo Aeropuerto.
    $aeropuerto = new Aeropuerto();

    // 2. Crear tres aviones y tres helicópteros.
    $avion1 = new Avion("Avión1", 2, 4, "Compañía A", "2022-01-01", 12000);
    $avion2 = new Avion("Avión2", 2, 2, "Compañía B", "2022-02-01", 15000);
    $avion3 = new Avion("Avión3", 2, 4, "Compañía A", "2022-03-01", 10000);

    $helicoptero1 = new Helicoptero("Helicóptero1", 2, 2, "Propietario1", 4);
    $helicoptero2 = new Helicoptero("Helicóptero2", 2, 2, "Propietario2", 3);
    $helicoptero3 = new Helicoptero("Helicóptero3", 2, 2, "Propietario3", 5);

    // 3. Introduce los objetos creados en el aeropuerto.
    $aeropuerto->insertar($avion1);
    $aeropuerto->insertar($avion2);
    $aeropuerto->insertar($avion3);
    $aeropuerto->insertar($helicoptero1);
    $aeropuerto->insertar($helicoptero2);
    $aeropuerto->insertar($helicoptero3);

    // 4. Probar el método buscar.
    echo "<h3>Buscar un elemento volador que existe:</h3>";
    $aeropuerto->buscar("Avión1");

    echo "<h3>Buscar un elemento volador que no existe:</h3>";
    $aeropuerto->buscar("AviónNoExistente");

    // 5. Probar el método listarCompania.
    echo "<h3>Listar aviones de la Compañía A:</h3>";
    $aeropuerto->listarCompania("Compañía A");

    echo "<h3>Listar aviones de una compañía que no existe:</h3>";
    $aeropuerto->listarCompania("Compañía No Existente");

    // 6. Probar el método rotores.
    echo "<h3>Listar helicópteros con 2 rotores:</h3>";
    $aeropuerto->rotores(2);

    echo "<h3>Listar helicópteros con un número de rotores que no existe:</h3>";
    $aeropuerto->rotores(10);

    // 7. Realizar el despegue de un avión.
    echo "<h3>Despegue del Avión1:</h3>";
    $aeropuerto->despegar("Avión1", 2000, 160);

    // Mostrar si finalmente está volando y la información del avión.
    $avion1->mostrarInformacion();

    // 8. Realizar el despegue de un helicóptero.
    echo "<h3>Despegue del Helicóptero1:</h3>";
    $aeropuerto->despegar("Helicóptero1", 60, 100);

    // Mostrar si finalmente está volando y la información del helicóptero.
    $helicoptero1->mostrarInformacion();

    ?>

</body>

</html>