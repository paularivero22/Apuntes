<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>

<body>
    <?php

    $articulos = [
        [
            'codigo' => 'A001',
            'descripcion' => 'Artículo 1',
            'existencias' => 10
        ],
        [
            'codigo' => 'A002',
            'descripcion' => 'Artículo 2',
            'existencias' => 5
        ],
        [
            'codigo' => 'A003',
            'descripcion' => 'Artículo 3',
            'existencias' => 20
        ],
        [
            'codigo' => 'A004',
            'descripcion' => 'Artículo 4',
            'existencias' => 15
        ]
    ];

    // Función para obtener el nombre del artículo con mayor número de existencias
    function mayor($articulos)
    {
        $maxExistencias = 0;
        $nombreArticulo = '';

        foreach ($articulos as $articulo) {
            if ($articulo['existencias'] > $maxExistencias) {
                $maxExistencias = $articulo['existencias'];
                $nombreArticulo = $articulo['descripcion'];
            }
        }
        return $nombreArticulo;
    }


    function sumar($articulos)
    {
        $totalExistencias = 0;

        foreach ($articulos as $articulo) {
            $totalExistencias += $articulo['existencias'];
        }
        return $totalExistencias;
    }


    function mostrar($articulos) {
        echo "<table border='1'>";
        echo "<tr>
        <th>Codigo</th>
        <th>Descripcion</th>
        <th>Existencias</th></tr>";

        foreach ($articulos as $articulo) {
            echo "<tr>";
            echo "<td>" . $articulo['codigo'] . "</td>";
            echo "<td>" . $articulo['descripcion'] . "</td>";
            echo "<td>" . $articulo['existencias'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }


    echo "<h2>Array de Artículos</h2>";
    mostrar($articulos);


    $articuloMayor = mayor($articulos);
    echo "<p>El artículo con mayor número de existencias es: " . $articuloMayor . "</p>";

    $totalExistencias = sumar($articulos);
    echo "<p>El total de existencias es: " . $totalExistencias . "</p>";
    ?>
</body>

</html>