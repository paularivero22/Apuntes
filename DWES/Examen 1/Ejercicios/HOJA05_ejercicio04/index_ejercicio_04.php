<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'Productos.php';

    $productos = [];

    $productos[] = new Alimentacion("A001", "Leche", 1.20, 12, 2024);
    $productos[] = new Alimentacion("A002", "Pan", 0.80, 9, 2023);
    $productos[] = new Electronica("E001", "Televisor", 300.00, 2);
    $productos[] = new Electronica("E002", "Laptop", 800.00, 3);

    echo "<h1>Datos de todos los productos en la cesta de la compra:</h1>";
    foreach ($productos as $producto) {
        $producto->mostrar();
    }

    $totalAlimentacion = 0;
    $totalElectronica = 0;

    foreach ($productos as $producto) {
        if ($producto instanceof Alimentacion) {
            $totalAlimentacion += $producto->getPrecio();
        } elseif ($producto instanceof Electronica) {
            $totalElectronica += $producto->getPrecio();
        }
    }

    $totalGeneral = $totalAlimentacion + $totalElectronica;

    echo "<h2>Importe total de los productos comprados:</h2>";
    echo "<p>Total Alimentación: {$totalAlimentacion} €</p>";
    echo "<p>Total Electrónica: {$totalElectronica} €</p>";
    echo "<p>Total General: {$totalGeneral} €</p>";

    if ($totalAlimentacion > $totalElectronica) {
        echo "<h3>Se ha gastado más en productos de Alimentación.</h3>";
    } elseif ($totalElectronica > $totalAlimentacion) {
        echo "<h3>Se ha gastado más en productos de Electrónica.</h3>";
    } else {
        echo "<h3>El gasto ha sido igual en ambos tipos de productos.</h3>";
    }
    ?>
</body>

</html>