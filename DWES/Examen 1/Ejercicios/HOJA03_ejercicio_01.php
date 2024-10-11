<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <?php
        function cargar() {
            $array = [];
            for($i = 0; $i < 20; $i++) {
                $array[$i] = rand(1, 100);
            }
            return $array;      
        }

        function ordenar($array) {
            sort($array);
            return $array;
        }

        function mezclar($array1, $array2) {
            $mezcla = array_merge($array1, $array2);
        }
    ?>
</body>
</html>