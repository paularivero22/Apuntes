<?php

function conectarBD() {
    $host = 'localhost'; 
    $usuario = 'root'; 
    $password = 'root'; 
    $bd = 'dwes_02_libros';

    $conexion = new mysqli($host, $usuario, $password, $bd);
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    return $conexion;
}


function guardarLibro($titulo, $anio_edicion, $precio, $fecha_adquisicion) {
    $conexion = conectarBD;
    $consulta = $conexion->prepare("INSERT INTO libros (titulo, anio_edicion, precio, fecha_adquisicion) VALUES (?, ?, ?, ?)");
    $consulta->bind_param("sids", $titulo, $anio_edicion, $precio, $fecha_adquisicion);
    $resultado = $consulta->execute();
    $consulta->close();
    $conexion->close();

    return $resultado;
}

function obtenerLibros() {
    $conexion = conectarBD();
    $consulta = "SELECT * FROM libros";
    $resultado = $conexion->query($consulta);
    
    $libros = [];
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $libros[] = $fila;
        }
    }
    $conexion->close();
    return $libros;
}

?>