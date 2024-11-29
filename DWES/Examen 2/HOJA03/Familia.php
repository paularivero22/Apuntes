<?php
    class Familia extends Medico {
        private $numPacientes;
    
        public function __construct($codigo, $nombre, $edad, $turno, $numPacientes) {
            parent::__construct($codigo, $nombre, $edad, $turno);
            $this->numPacientes = $numPacientes;
        }
    
        public function getNumPacientes() { 
            return $this->numPacientes; 
        }

        public function setNumPacientes($numPacientes) { 
            $this->numPacientes = $numPacientes; 
        }
    
        public function toString() {
            return "Familia - Código: $this->codigo, Nombre: $this->nombre, Edad: $this->edad, Turno: {$this->turno->getNombre()}, Número de Pacientes: $this->numPacientes";
        }
    }
    
?>