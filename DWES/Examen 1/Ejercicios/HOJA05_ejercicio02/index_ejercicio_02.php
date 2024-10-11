<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Ejercicio2</title>
</head>

<body>
    <?php
    include 'cuentas.php';

    "<h1>Pruebas de Clases: CuentaCorriente y CuentaAhorro</h1>";
    "<h2>Cuenta Corriente:</h2>";

    $cuentaCorriente = new CuentaCorriente("123456", "Juan Pérez", 500, 15);
    $cuentaCorriente->mostrar();

    echo "<h4>Después de ingresar 100 €:</h4>";
    $cuentaCorriente->ingreso(100);
    $cuentaCorriente->mostrar();

    echo "<h4>Después de retirar 50 €:</h4>";
    $cuentaCorriente->reintegro(50);
    $cuentaCorriente->mostrar();


    "<h2>Cuenta de Ahorro:</h2>";

    $cuentaAhorro = new CuentaAhorro("654321", "María López", 1000, 20, 2);
    $cuentaAhorro->mostrar();

    echo "<h4>Después de aplicar el interés:</h4>";
    $cuentaAhorro->aplicarIntereses();
    $cuentaAhorro->mostrar();
    ?>
</body>

</html>