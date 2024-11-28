<?php
require 'ConexionBD.php';

function getEquipos(): array {
    $pdo = ConexionBD::getConexion();
    $stmt = $pdo->prepare("SELECT nombre FROM equipos");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
