<?php
include 'elemento_volador.php';

class Helicoptero extends ElementoVolador {
    private $propietario;
    private $nRotor;

    public function __construct($nombre, $numAlas, $numMotores, $propietario, $nRotor) {
        parent::__construct($nombre, $numAlas, $numMotores);
        $this->propietario = $propietario;
        $this->nRotor = $nRotor;
    }

    public function getNRotor(): int {
        return $this->nRotor;
    }
    
    public function volar($altitud) {
        $maxAltitud = 100 * $this->nRotor;
        if ($altitud < 0 || $altitud > $maxAltitud) {
            echo "<p>Error: Altitud fuera del rango permitido para el helicóptero.</p>";
            return;
        }
        while ($this->altitud < $altitud) {
            $this->altitud += 20;
            echo "<p>Helicóptero ascendiendo: Altitud actual: {$this->altitud} metros</p>";
        }
    }

    public function mostrarInformacion() {
        echo "<h3>Helicóptero: {$this->getNombre()}</h3>";
        echo "<p>Propietario: {$this->propietario}</p>";
        echo "<p>Número de Rotores: {$this->nRotor}</p>";
        echo "<p>Altitud Actual: {$this->altitud} metros</p>";
        echo "<p>Velocidad Actual: {$this->velocidad} km/h</p>";
    }
}
?>
