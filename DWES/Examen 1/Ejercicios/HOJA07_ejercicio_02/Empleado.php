<?php
require_once 'InformacionPersonal.php';
require_once 'InformacionLaboral.php';
require_once 'Mensaje.php';

class Empleado {
    use InformacionPersonal, InformacionLaboral, Mensaje;

    public function mostrarInformacion() {
        $this->mostrarMensaje($this->mostrarInformacionPersonal());
        $this->mostrarMensaje($this->mostrarInformacionLaboral());
    }
}
?>
