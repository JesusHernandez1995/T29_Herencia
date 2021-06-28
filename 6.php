<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Persona
{
    protected $nombre;
    protected $edad;
    public function __construct($nom, $ed)
    {
        $this->nombre = $nom;
        $this->edad = $ed;
    }
    public function imprimirDatosPersonales()
    {
        echo 'Nombre:' . $this->nombre . '<br>';
        echo 'Edad:' . $this->edad . '<br>';
    }
}

class Empleado extends Persona
{
    protected $sueldo;
    public function __construct($nom, $ed, $su)
    {
        parent::__construct($nom, $ed);
        $this->sueldo = $su;
    }
    public function imprimirSueldo()
    {
        echo 'Sueldo:' . $this->sueldo . '<br>';
    }
}

$persona1 = new Persona('Pablo', 32);
echo 'Datos personales de la persona:<br>';
$persona1->imprimirDatosPersonales();
$empleado1 = new Empleado('Javier', 19, 1300);
echo 'Datos personales y sueldo del empleado:<br>';
$empleado1->imprimirDatosPersonales();
$empleado1->imprimirSueldo();
?>
</body>
</html>