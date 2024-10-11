<?php 
    class Cuenta {
        protected int $numero;
        protected string $titular;
        protected float $saldo;
        public function __construct(int $numero, string $titular,float $saldo) {
            $this->numero = $numero;
            $this->titular = $titular;
            $this->saldo = $saldo;
        }

        public function getSaldo(): float {
            return $this->saldo;
        }

        public function ingreso($cantidad): void {
            $this->saldo += $cantidad;
        }

        public function reintegro($cantidad): void {
            if($this->saldo >= $cantidad) {
                $this->saldo -= $cantidad;
            } else {
                echo "Saldo insuficiente";
        }
    }

    public function esPreferencial($cantidad): bool {
        return $this->saldo > $cantidad;
    }

    public function mostrar(): void {
        echo "<h3>Datos de la cuenta:</h3>";
        echo "Numero: " . $this->numero;
        echo "Titular: " . $this->titular;
        echo "Saldo: " . $this->saldo;
    }
}

class CuentaCorriente extends Cuenta {
    private float $couta_mantenimiento;

    public function __construct(int $numero, string $titular, float $saldo, float $cuota) {
        parent::__construct($numero, $titular, $saldo);
        $this->couta_mantenimiento = $cuota;
        
        $this->saldo -= $this->couta_mantenimiento;
    }

    public function getCuota(): float {
        return $this->couta_mantenimiento;
    }

    public function reintegro($cantidad): void {
        if($this->saldo >= 20) {
            parent::reintegro($cantidad); //parent::reintegro() para llamar al metodo de la clase padre
        } else {
            echo "El saldo es inferior a 20";
        }
    }

    public function mostrar(): void {
        parent::mostrar();
        echo "Cuota de Mantenimiento: " . $this->couta_mantenimiento;
    }
}

    class CuentaAhorro extends Cuenta {
        private float $comision_apertura;
        private float $intereses;
        
        public function __construct($numero, $titular, $saldo, $comision_apertura, $interes) {
            parent::__construct($numero, $titular, $saldo);
            $this->$comision_apertura = $comision_apertura;
            $this->interes = $interes;
            //restar la comision de apertura al saldo inicial
            $this->saldo -= $this->comision_apertura;
        }

        public function aplicarIntereses(): void {
            $this->saldo += $this->saldo * ($this->intereses / 100);
        }

        public function mostrar(): void {
            parent::mostrar();
            echo "Comision de apertura: " . $this->comision_apertura . "<br/>";
            echo "Intereses: " . $this->intereses . "<br/>";
        }
    }
?>