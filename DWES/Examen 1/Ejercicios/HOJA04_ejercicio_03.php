<?php

class Monedero
{
    private $dinero;
    private static $numero_monederos = 0;

    public function __construct($dinero_inicial)
    {
        $this->dinero = $dinero_inicial;
        self::$numero_monederos++;
    }

    public function meterDinero($cantidad)
    {
        if ($cantidad > 0) {
            $this->dinero += $cantidad;
        } else {
            echo "La cantidad a añadir debe ser mayor que cero.<br>";
        }
    }

    public function sacarDinero($cantidad)
    {
        if ($cantidad > $this->dinero) {
            echo "No se puede sacar más dinero del que se tiene en el monedero.<br>";
        } elseif ($cantidad > 0) {
            $this->dinero -= $cantidad;
        } else {
            echo "La cantidad a retirar debe ser mayor que cero.<br>";
        }
    }

    public function consultarDinero()
    {
        return $this->dinero;
    }

    public static function obtenerNumeroMonederos()
    {
        return self::$numero_monederos;
    }

    public function __destruct()
    {
        self::$numero_monederos--;
    }
}
?>