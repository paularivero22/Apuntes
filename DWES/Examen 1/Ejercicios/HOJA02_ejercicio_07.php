<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function obtenerDigitosControl($entidad, $oficina, $cuenta)
    {
        //pesos para los dígitos de control
        $pesos = [1, 2, 4, 8, 5, 10, 9, 7, 3, 6];

        //calcular los dígitos de control para entidad y oficina
        $suma1 = 0;
        for ($i = 0; $i < 4; $i++) {
            $suma1 += (int) $entidad[$i] * $pesos[$i];
            $suma1 += (int) $oficina[$i] * $pesos[$i + 4];
        }
        $digito1 = 11 - ($suma1 % 11);
        if ($digito1 == 10)
            $digito1 = 1;
        if ($digito1 == 11) 
            $digito1 = 0;

        // Calcular los dígitos de control para cuenta
        $suma2 = 0;
        for ($i = 0; $i < 10; $i++) {
            $suma2 += (int) $cuenta[$i] * $pesos[$i];
        }
        $digito2 = 11 - ($suma2 % 11);
        if ($digito2 == 10)
            $digito2 = 1;
        if ($digito2 == 11)
            $digito2 = 0;

        return "$digito1$digito2";
    }



    //ejemplo 
    $cuentaCorriente = "1234-5678-94-1234567890";

    $entidad = substr($cuentaCorriente, 0, 4);
    $oficina = substr($cuentaCorriente, 5, 4);
    $digitosControl = substr($cuentaCorriente, 10, 2);
    $cuenta = substr($cuentaCorriente, 13, 10);


    echo "Código de la entidad: $entidad\n";
    echo "Código de la oficina: $oficina\n";
    echo "Número de cuenta: $cuenta\n";
    echo "Dígitos de control: $digitosControl\n";


    $digitosCalculados = obtenerDigitosControl($entidad, $oficina, $cuenta);
    echo "Dígitos de control calculados: $digitosCalculados\n";

    if ($digitosControl === $digitosCalculados) {
        echo "La cuenta corriente es correcta.\n";
    } else {
        echo "La cuenta corriente es incorrecta.\n";
    }
    ?>

</body>

</html>