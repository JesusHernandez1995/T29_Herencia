<?php 

/* Ejercicio 5 */

// clase Padre
class Operacion{                
    public $valor1;
    public $valor2;
    protected $resultado;

    // Método cargar 1
    public function cargar1($value)
    {
        $this->valor1=$value;
    }

    // Método cargar 2
    public function cargar2($value)
    {
        $this->valor2=$value;
    }

    // Método para mostrar el resultado
    public function imprimir_resultado()
    {
        echo $this->resultado.'<br>';
    }
}

// Clases hijas
class Suma extends Operacion{
    public function operar()
    {
        $this->resultado=$this->valor1+$this->valor2;
    }
}

class Resta extends Operacion{
    public function operar()
    {
        $this->resultado=$this->valor1-$this->valor2;
    }
}

$suma = new Suma();
$suma->cargar1(40);
$suma->cargar2(30);
$suma->operar();
echo 'El resultado de la suma de '.$suma->valor1.' y '.$suma->valor2.' es: ';
$suma->imprimir_resultado();
echo '<br><br>';
$resta = new Resta();
$resta->cargar1(40);
$resta->cargar2(30);
$resta->operar();
echo 'El resultado de la resta de '.$resta->valor1.' y '.$resta->valor2.' es: ';
$resta->imprimir_resultado();

?>