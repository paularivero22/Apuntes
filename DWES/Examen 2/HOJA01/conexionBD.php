<?php
require 'vendor/autoload.php';

class ConexionBD {
    private static $pdo;

    public static function getConexion(): PDO {
        if (!self::$pdo) {
            // Cargar las variables del archivo .env
            $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
            $dotenv->load();

            $dsn = $_ENV['BD_DNS'];
            $username = $_ENV['BD_USERNAME'];
            $password = $_ENV['BD_PASSWORD'];

            try {
                self::$pdo = new PDO($dsn, $username, $password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error en la conexión: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
?>
