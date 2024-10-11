<?php
namespace MiProyecto\clases;

class Aeropuerto
{
    private array $elementosVoladores;

    public function __construct()
    {
        $this->elementosVoladores = [];
    }

    public function insertar(ElementoVolador $elemento): void
    {
        $this->elementosVoladores[] = $elemento;
    }

    public function buscar(string $nombre): void
    {
        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento->getNombre() === $nombre) {
                echo "Elemento volador encontrado:<br>";
                $elemento->mostrarInformacion();
                return;
            }
        }
        echo "Elemento volador " . $nombre . " no encontrado <br>";
    }

    public function listarCompania(string $compania): void
    {
        $found = false;
        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento instanceof Avion && $elemento->getCompaniaAerea() === $compania) {
                echo "Avión de la compañía " . $compania . ":<br/>";
                $elemento->mostrarInformacion();
                $found = true;
            }
        }
        if (!$found) {
            echo "No se encontraron aviones de la compañía " . $compania ."<br/>";
        }
    }

    public function rotores(int $nRotor): void
    {
        $found = false;
        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento instanceof Helicoptero && $elemento->getNRotor() === $nRotor) {
                echo "Helicóptero con {$nRotor} rotores:<br>";
                $elemento->mostrarInformacion();
                $found = true;
            }
        }
        if (!$found) {
            echo "No se encontraron helicópteros con " . $nRotor . " rotores <br/>";
        }
    }

    public function despegar(string $nombre, float $altitud, float $velocidad): void
    {
        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento->getNombre() === $nombre) {
                echo "Preparando el despegue del elemento volador '{$nombre}':<br>";
                $elemento->acelerar($velocidad);
                $elemento->volar($altitud);
                if ($elemento->volando()) {
                    echo "El elemento volador '{$nombre}' está en el aire.<br>";
                } else {
                    echo "El elemento volador '{$nombre}' no ha podido despegar.<br>";
                }
                return;
            }
        }
        echo "Elemento volador '{$nombre}' no encontrado para despegar.<br>";
    }
}

?>