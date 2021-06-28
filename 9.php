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
        class Operacion {
            
            private $valor1;
            private $valor2;
            private $resultado;

            
            __construct(){

            }

            public function cargar1($valor) {
                $this->valor1 = $valor;
            }

            public function cargar2($valor) {
                $this->valor2 = $valor;
            }

            

        } 
    ?>
</body>
</html>