<?php
include 'ElementoVolador.php';

class Avion extends ElementoVolador {
    private $companiaAerea;
    private $fechaAlta;
    private $altitudMaxima;

    public function getCompaniaAerea(): string {
        return $this->companiaAerea;
    }

    

    public function __construct($nombre, $numAlas, $numMotores, $companiaAerea, $fechaAlta, $altitudMaxima) {
        parent::__construct($nombre, $numAlas, $numMotores);
        $this->companiaAerea = $companiaAerea;
        $this->fechaAlta = $fechaAlta;
        $this->altitudMaxima = $altitudMaxima;
    }

    public function volar($altitud) {
        if ($altitud < 0 || $altitud > $this->altitudMaxima) {
            echo "<p>Error: Altitud fuera del rango permitido para el avión.</p>";
            return;
        }
        if ($this->velocidad < 150) {
            echo "<p>Error: La velocidad debe ser al menos 150 para volar.</p>";
            return;
        }
        while ($this->altitud < $altitud) {
            $this->altitud += 100;
            echo "<p>Avión ascendiendo: Altitud actual: {$this->altitud} metros</p>";
        }
    }

    public function mostrarInformacion() {
        echo "<h3>Avión: {$this->getNombre()}</h3>";
        echo "<p>Compañía Aérea: {$this->companiaAerea}</p>";
        echo "<p>Fecha de Alta: {$this->fechaAlta}</p>";
        echo "<p>Altitud Máxima: {$this->altitudMaxima} metros</p>";
        echo "<p>Altitud Actual: {$this->altitud} metros</p>";
        echo "<p>Velocidad Actual: {$this->velocidad} km/h</p>";
    }
}
?>
