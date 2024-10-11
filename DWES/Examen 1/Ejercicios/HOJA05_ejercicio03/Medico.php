<?php
abstract class Medico
{
    protected $nombre;
    protected $edad;
    protected $turno;

    public function __construct($nombre, $edad, $turno)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->turno = $turno;
    }

    abstract public function mostrar();

    public function getTurno()
    {
        return $this->turno;
    }

    public function getEdad()
    {
        return $this->edad;
    }
}

class Familia extends Medico
{
    private $num_pacientes;

    public function __construct($nombre, $edad, $turno, $num_pacientes)
    {
        parent::__construct($nombre, $edad, $turno);
        $this->num_pacientes = $num_pacientes;
    }

    public function mostrar()
    {
        echo "<h3>Médico de Familia:</h3>";
        echo "<p>Nombre: {$this->nombre}</p>";
        echo "<p>Edad: {$this->edad}</p>";
        echo "<p>Turno: {$this->turno}</p>";
        echo "<p>Número de Pacientes: {$this->num_pacientes}</p>";
    }

    public function getNumPacientes()
    {
        return $this->num_pacientes;
    }
}

class Urgencia extends Medico
{
    private $unidad;

    public function __construct($nombre, $edad, $turno, $unidad)
    {
        parent::__construct($nombre, $edad, $turno);
        $this->unidad = $unidad;
    }
    public function mostrar()
    {
        echo "<h3>Médico de Urgencias:</h3>";
        echo "<p>Nombre: {$this->nombre}</p>";
        echo "<p>Edad: {$this->edad}</p>";
        echo "<p>Turno: {$this->turno}</p>";
        echo "<p>Unidad: {$this->unidad}</p>";
    }
}
?>