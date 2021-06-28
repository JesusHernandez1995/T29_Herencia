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
        private $nombre;
        private $sexo;
        private $edad;
        private $asistencia;

        private $NOMBRES_CHICOS = [
            'Pepe',
            'Fernando',
            'Alberto',
            'Nacho',
            'Eustaquio',
        ];
        private $NOMBRES_CHICAS = [
            'Alicia',
            'Laura',
            'Clotilde',
            'Pepa',
            'Elena',
        ];
        private $CHICO = 0;
        private $CHICA = 1;

        public function __construct()
        {
            $determinar_sexo = 5;
            if ($determinar_sexo == $this->CHICO) {
                $this->nombre = $this->NOMBRES_CHICOS[5];
                $this->sexo = 'H';
            } else {
                $this->nombre = $this->NOMBRES_CHICAS[5];
                $this->sexo = 'M';
            }
            $this->disponibilidad();
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function getSexo()
        {
            return $this->sexo;
        }

        public function setSexo($sexo)
        {
            $this->sexo = $sexo;
        }

        public function getEdad()
        {
            return $this->edad;
        }

        public function setEdad($edad)
        {
            $this->edad = $edad;
        }

        public function isAsistencia()
        {
            return $this->asistencia;
        }

        public function setAsistencia($asistencia)
        {
            $this->asistencia = $asistencia;
        }

        abstract public function disponibilidad();
    }

    class Alumno extends Persona
    {

        private $nota;

        public function __construct()
        {
            parent::__construct();
            $this->nota = 5;
            parent::__construct(5);
        }

        public function getNota()
        {
            return $this->nota;
        }

        public function setNota($nota)
        {
            $this->nota = $nota;
        }

        public function disponibilidad()
        {
            $prob = 5;
            if ($prob < 50) {
                parent::__construct(false);
            } else {
                parent::__construct(true);
            }
        }

        public function toString()
        {
            return 'Nombre: ' .
                parent::getNombre() .
                ' ,sexo: ' .
                strval(parent::getSexo()) .
                ' , nota: ' .
                strval($this->nota);
        }
    }

    class aula {
        
    }
    ?>
</body>