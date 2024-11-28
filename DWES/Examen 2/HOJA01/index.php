<?php
require 'funcionesBD.php';

$equipos = getEquipos();
$jugadores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $equipo = $_POST['equipo'];
    $pdo = ConexionBD::getConexion();
    $stmt = $pdo->prepare("SELECT nombre FROM jugadores WHERE equipo = ?");
    $stmt->execute([$equipo]);
    $jugadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugadores de la NBA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form method="post">
        <label for="equipo">Seleccione un equipo:</label>
        <select name="equipo" id="equipo">
            <?php foreach ($equipos as $equipo): ?>
                <option value="<?= $equipo['nombre'] ?>"><?= $equipo['nombre'] ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Mostrar jugadores</button>
    </form>

    <table>
        <tr>
            <th>Jugador</th>
        </tr>
        <?php foreach ($jugadores as $jugador): ?>
            <tr>
                <td><?= $jugador['nombre'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>



