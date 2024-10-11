<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function capicua($num): void {
            $numero=$num;
            $inverso=0;
            $aux=$numero;
            while($aux!=0){
                $resto=$aux%10;
                $inverso=$inverso*10+$resto;
                $aux=(int)($aux/10);
            }
            if($numero==$inverso)
            echo "El numero $numero es capicúa<br />";
            else
            echo "El numero $numero NO es capicúa<br />";
        }

        function redondear($num): int {
            /* if(($num - (int)$num) > 0.50) {
                return ceil($num); 
            } else {
                return floor($num);
            }
                */
            return round($num);
        }

        function numDigitos($num) {
            $numStr = strval($num);
            $digitos = 0;

            for($i=0; $i <= mb_strlen($numStr);$i++) {
                $digitos++;
            }
            return digitos;
        }

        $numero = 212.50;
        echo 'Numero redondeado: ' . redondear($numero) . "<br/>";
        echo 'Numero de digitos: ' . numDigitos($numero);
    ?>
</body>
</html>