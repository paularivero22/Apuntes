<?php
require_once 'funcionesBD.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $anio_edicion = $_POST['anio_edicion'];
    $precio = $_POST['precio'];
    $fecha_adquisicion = $_POST['fecha_adquisicion'];

    if (empty($titulo) || empty($anio_edicion) || empty($precio) || empty($fecha_adquisicion)) {
        echo "Error: Todos los campos son obligatorios.";
    } elseif (!checkdate(substr($fecha_adquisicion, 5, 2), substr($fecha_adquisicion, 8, 2), substr($fecha_adquisicion, 0, 4))) {
        echo "Error: La fecha de adquisición no es válida.";
    } else {
        if (guardarLibro($titulo, $anio_edicion, $precio, $fecha_adquisicion)) {
            echo "Datos guardados correctamente.";
        } else {
            echo "Error al guardar los datos.";
        }
    }
    echo '<br><a href="libros.php">Volver a la página de libros</a>';
}
?>
