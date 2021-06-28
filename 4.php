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
        public function cargarDatosPersonales($nom, $ed)
        {
            $this->nombre = $nom;
            $this->edad = $ed;
        }
        public function imprimirDatosPersonales()
        {
            echo 'Nombre:' . $this->nombre . '<br>';
            echo 'Edad:' . $this->edad . '<br>';
        }

        public function setEdad($edad) {
            $this->edad = $edad;
        }
    }

    class Empleado extends Persona
    {
        protected $sueldo;
        public function cargarSueldo($su)
        {
            $this->sueldo = $su;
        }
        public function imprimirSueldo()
        {
            echo 'Sueldo:' . $this->sueldo . '<br>';
        }
    }

    $empleado1 = new Empleado();
    $empleado1->setEdad (34);
    ?>
</body>

</html>