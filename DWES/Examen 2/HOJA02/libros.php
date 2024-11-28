<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros</title>
</head>
<body>
    <h1>Registrar un libro</h1>
    <form action="libros_guardar.php" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>

        <label for="anio_edicion">Año de Edición:</label>
        <input type="number" id="anio_edicion" name="anio_edicion" min="1500" max="<?= date('Y') ?>" required><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" required><br>

        <label for="fecha_adquisicion">Fecha de Adquisición:</label>
        <input type="date" id="fecha_adquisicion" name="fecha_adquisicion" required><br>

        <button type="submit">Guardar Libro</button>
    </form>

    <form action="libros_datos.php" method="get">
        <button type="submit">Ver todos los libros</button>
    </form>
</body>
</html>
