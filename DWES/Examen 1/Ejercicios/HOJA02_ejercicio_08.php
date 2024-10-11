<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //1
    $cadena = "Comer algas es realmente sano";

    //2.
    $posicionAlgas = strpos($cadena, "algas");
    echo "La posición de la palabra 'algas' es: $posicionAlgas\n";

    //3
    $cadenaReemplazada = str_replace("realmente", "muy", $cadena);
    echo "La cadena después de reemplazar 'realmente' por 'muy' es: $cadenaReemplazada\n";

    //4
    $existeAnacardo = strpos($cadena, "anacardo") !== false;
    echo $existeAnacardo ? "La palabra 'anacardo' sí existe en la cadena.\n" : "La palabra 'anacardo' no existe en la cadena.\n";

    //5
    $cadenaInvertida = strrev($cadena);
    echo "La cadena invertida es: $cadenaInvertida\n";

    //6
    $numeroE = substr_count($cadena, "e");
    echo "El número de vocales 'e' en la cadena es: $numeroE\n";
    ?>

</body>

</html>