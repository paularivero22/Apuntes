<?php
trait InformacionLaboral {
    protected string $codigoEmpleado;
    protected float $salario;

    public function actualizarInformacionLaboral(string $codigoEmpleado, float $salario) {
        $this->codigoEmpleado = $codigoEmpleado;
        $this->salario = $salario;
    }

    public function mostrarInformacionLaboral() {
        return "Código: $this->codigoEmpleado, Salario: $this->salario";
    }
}
?>
