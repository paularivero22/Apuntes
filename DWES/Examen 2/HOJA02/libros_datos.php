<?php
require_once 'funcionesBD.php';
$libros = obtenerLibros();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros Registrados</title>
</head>
<body>
    <h1>Listado de Libros</h1>
    <?php if (count($libros) > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Título</th>
                    <th>Año de Edición</th>
                    <th>Precio</th>
                    <th>Fecha de Adquisición</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libros as $libro): ?>
                    <tr>
                        <td><?= $libro['id'] ?></td>
                        <td><?= htmlspecialchars($libro['titulo']) ?></td>
                        <td><?= $libro['anio_edicion'] ?></td>
                        <td><?= $libro['precio'] ?></td>
                        <td><?= $libro['fecha_adquisicion'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay libros registrados.</p>
    <?php endif; ?>
    <br><a href="libros.php">Volver a la página de libros</a>
</body>
</html>
