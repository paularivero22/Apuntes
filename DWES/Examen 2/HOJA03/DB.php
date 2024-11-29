<?php
    class DB {
    private static $instance = null;
    private $conexion;
    private const DNS = "mysql:host=localhost;dbname=dwes_05_hospital";
    private const USUARIO = "root";
    private const PASSWORD = "";

    private function __construct() {
        try {
            $this->conexion = new PDO(self::DNS, self::USUARIO, self::PASSWORD);
        } catch (PDOException $e) {
            die("Error en la conexión: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function getMedicos() {
        $sql = "SELECT * FROM medicos";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $medicos = [];
        foreach ($resultados as $row) {
            $turno = new Turno($row['turno_id'], $row['turno_nombre']);
            if ($row['tipo'] === 'familia') {
                $medicos[] = new Familia($row['codigo'], $row['nombre'], $row['edad'], $turno, $row['numPacientes']);
            } else {
                $medicos[] = new Urgencia($row['codigo'], $row['nombre'], $row['edad'], $turno, $row['unidad']);
            }
        }
        return $medicos;
    }
}
?>