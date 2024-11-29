<?php
    class Urgencia extends Medico {
        private $unidad;
    
        public function __construct($codigo, $nombre, $edad, $turno, $unidad) {
            parent::__construct($codigo, $nombre, $edad, $turno);
            $this->unidad = $unidad;
        }
    
        public function getUnidad() { 
            return $this->unidad; 
        }
        
        public function setUnidad($unidad) { 
            $this->unidad = $unidad; 
        }
    
        public function toString() {
            return "Urgencia - Código: $this->codigo, Nombre: $this->nombre, Edad: $this->edad, Turno: {$this->turno->getNombre()}, Unidad: $this->unidad";
        }
    }
    
?>