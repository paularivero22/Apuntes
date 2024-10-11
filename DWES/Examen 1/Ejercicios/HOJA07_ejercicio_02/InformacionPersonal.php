<?php
trait InformacionPersonal {
    protected string $nombre;
    protected int $edad;
    protected string $direccion;

    public function actualizarInformacionPersonal(string $nombre, int $edad, string $direccion) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->direccion = $direccion;
    }

    public function mostrarInformacionPersonal() {
        return "Nombre: $this->nombre, Edad: $this->edad, Dirección: $this->direccion";
    }
}
?>
