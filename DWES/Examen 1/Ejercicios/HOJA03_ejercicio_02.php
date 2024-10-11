<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>

<body>
    <?php
    function desglose($dinero)
    {

        $monedas2 = (int) $dinero / 2;
        //se resta al dinero las monedas de 2 euros y se redondea a 2 decimales
        $dinero = round($dinero - $monedas2 * 2, 2);

        $monedas1 = (int) ($dinero / 1);
        $dinero = round($dinero - $monedas1 * 1, 2);

        $monedas50 = (int) ($dinero / 0.50);
        $dinero = round($dinero - $monedas50 * 0.50, 2);

        $monedas20 = (int) ($dinero / 0.20);
        $dinero = round($dinero - $monedas20 * 0.20, 2);

        $monedas10 = (int) ($dinero / 0.10);
        $dinero = round($dinero - $monedas10 * 0.10, 2);

        $monedas5 = (int) ($dinero / 0.05);
        $dinero = round($dinero - $monedas5 * 0.05, 2);

        $monedas2cent = (int) ($dinero / 0.02);
        $dinero = round($dinero - $monedas2cent * 0.02, 2);

        $monedas1cent = (int) ($dinero / 0.01);
        $dinero = round($dinero - $monedas1cent * 0.01, 2);
    
        echo "Monedas de 2€ -> " . $monedas2 . "\n"
        . "Monedas de 1€ -> " . $monedas1 . "\n" 
        . "Monedas de 50 cents -> " . $monedas50 . "\n" 
        . "Monedas de 20 cents -> " . $monedas20 . "\n" 
        . "Monedas de 10 cents -> " . $monedas10 . "\n" 
        . "Monedas de 5 cents -> " . $monedas5 . "\n"
        . "Monedas de 2 cents -> " . $monedas2cent . "\n"
        . "Monedas de 1 cent -> " . $monedas1cent . "\n";
    }

    $dinero = 10.50;
    desglose($dinero);
    ?>
</body>

</html>