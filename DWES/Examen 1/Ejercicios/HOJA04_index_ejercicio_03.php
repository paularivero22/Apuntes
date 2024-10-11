<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba ejercicio3</title>
</head>

<body>
    <?php

    require_once 'Monedero.php';

    $monedero1 = new Monedero(100);
    echo "Dinero en el monedero 1: " . $monedero1->consultarDinero() . " €<br>";

    $monedero1->meterDinero(50);
    echo "Dinero en el monedero 1 después de meter 50 €: " . $monedero1->consultarDinero() . " €<br>";

    $monedero1->sacarDinero(200);

    $monedero1->sacarDinero(30);
    echo "Dinero en el monedero 1 después de sacar 30 €: " . $monedero1->consultarDinero() . " €<br>";

    $monedero2 = new Monedero(200);
    echo "Dinero en el monedero 2: " . $monedero2->consultarDinero() . " €<br>";

    echo "Número de monederos: " . Monedero::obtenerNumeroMonederos() . "<br>";

    unset($monedero1);

    echo "Número de monederos después de destruir el monedero 1: " . Monedero::obtenerNumeroMonederos() . "<br>";
    ?>

</body>

</html>