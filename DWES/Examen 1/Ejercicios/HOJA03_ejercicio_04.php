<?php
    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<title>Valores del Array \$_SERVER</title>";
    echo "</head>";
    echo "<body>";
    echo "<h2>Valores del Array \$_SERVER</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nombre de la Variable</th><th>Valor</th></tr>";

    foreach ($_SERVER as $i => $valor) {
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>" . $valor . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</body>";
    echo "</html>";
?>
