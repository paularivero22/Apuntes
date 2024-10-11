<?php
abstract class Producto
{
    protected $codigo;
    protected $precio;
    protected $nombre;

    public function __construct($codigo, $nombre, $precio)
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    abstract public function mostrar();
}

class Alimentacion extends Producto
{
    private $mes_caducidad;
    private $ano_caducidad;

    public function __construct($codigo, $nombre, $precio, $mes_caducidad, $ano_caducidad)
    {
        parent::__construct($codigo, $nombre, $precio);
        $this->mes_caducidad = $mes_caducidad;
        $this->ano_caducidad = $ano_caducidad;
    }

    public function getMesCaducidad()
    {
        return $this->mes_caducidad;
    }

    public function getAnoCaducidad()
    {
        return $this->ano_caducidad;
    }

    public function setMesCaducidad($mes_caducidad)
    {
        $this->mes_caducidad = $mes_caducidad;
    }

    public function setAnoCaducidad($ano_caducidad)
    {
        $this->ano_caducidad = $ano_caducidad;
    }

    public function mostrar()
    {
        echo "<h3>Producto de Alimentación:</h3>";
        echo "<p>Código: {$this->codigo}</p>";
        echo "<p>Nombre: {$this->nombre}</p>";
        echo "<p>Precio: {$this->precio} €</p>";
        echo "<p>Caducidad: {$this->mes_caducidad}/{$this->ano_caducidad}</p>";
    }
}

class Electronica extends Producto
{
    private $plazo_garantia;

    public function __construct($codigo, $nombre, $precio, $plazo_garantia)
    {
        parent::__construct($codigo, $nombre, $precio);
        $this->plazo_garantia = $plazo_garantia;
    }

    public function getPlazoGarantia()
    {
        return $this->plazo_garantia;
    }

    public function setPlazoGarantia($plazo_garantia)
    {
        $this->plazo_garantia = $plazo_garantia;
    }

    public function mostrar()
    {
        echo "<h3>Producto de Electrónica:</h3>";
        echo "<p>Código: {$this->codigo}</p>";
        echo "<p>Nombre: {$this->nombre}</p>";
        echo "<p>Precio: {$this->precio} €</p>";
        echo "<p>Plazo de Garantía: {$this->plazo_garantia} años</p>";
    }
}
?>