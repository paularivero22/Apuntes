<?php
namespace MiProyecto\clases;

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
            echo "Error: Altitud fuera del rango permitido para el helicóptero";
            return;
        }
        while ($this->altitud < $altitud) {
            $this->altitud += 20;
            echo "Helicóptero ascendiendo: Altitud actual: " . $this->altitud . " metros";
        }
    }

    public function mostrarInformacion() {
        echo "Helicóptero: " . $this->getNombre();
        echo "Propietario: " . $this->propietario;
        echo "Número de Rotores: " . $this->nRotor;
        echo "Altitud Actual: " . $this->altitud . " metros";
        echo "Velocidad Actual: " . $this->velocidad ." km/h";
    }
}
?>
