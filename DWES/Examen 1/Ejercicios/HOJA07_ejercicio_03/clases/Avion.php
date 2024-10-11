<?php
namespace Miproyecto\clases;

class Avion extends ElementoVolador
{
    private $companiaAerea;
    private $fechaAlta;
    private $altitudMaxima;

    public function getCompaniaAerea(): string
    {
        return $this->companiaAerea;
    }



    public function __construct($nombre, $numAlas, $numMotores, $companiaAerea, $fechaAlta, $altitudMaxima)
    {
        parent::__construct($nombre, $numAlas, $numMotores);
        $this->companiaAerea = $companiaAerea;
        $this->fechaAlta = $fechaAlta;
        $this->altitudMaxima = $altitudMaxima;
    }

    public function volar($altitud){
        if ($altitud < 0 || $altitud > $this->altitudMaxima) {
            echo "Error: Altitud fuera del rango permitido para el avión";
            return;
        }
        if ($this->velocidad < 150) {
            echo "Error: La velocidad debe ser al menos 150 para volar";
            return;
        }
        while ($this->altitud < $altitud) {
            $this->altitud += 100;
            echo "Avión ascendiendo: Altitud actual: " . $this->altitud . " metros";
        }
    }

    public function mostrarInformacion()
    {
        echo "Avión: " . $this->getNombre();
        echo "Compañía Aérea: " . $this->companiaAerea;
        echo "Fecha de Alta: " . $this->fechaAlta;
        echo "Altitud Máxima: " . $this->altitudMaxima . " metros";
        echo "Altitud Actual: " . $this->altitud . " metros";
        echo "Velocidad Actual: " . $this->velocidad . " km/h</p>";
    }
}
?>