<?php
include 'Volador.php';

abstract class ElementoVolador implements Volador {
    private $nombre;
    private $numAlas;
    private $numMotores;
    protected $altitud;
    protected $velocidad;

    public function __construct($nombre, $numAlas, $numMotores) {
        $this->nombre = $nombre;
        $this->numAlas = $numAlas;
        $this->numMotores = $numMotores;
        $this->altitud = 0;
        $this->velocidad = 0;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getAltitud() {
        return $this->altitud;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }

    public function volando() {
        return $this->altitud > 0;
    }

    public function acelerar($velocidad) {
        $this->velocidad = $velocidad;
    }

    abstract public function volar($altitud);
    abstract public function mostrarInformacion();
}
?>
