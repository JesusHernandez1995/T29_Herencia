<?php 

/* Ejercicio 3 */

// clase Padre
class Operacion{                
    protected $valor1;
    protected $valor2;
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

$suma = new Suma();
$suma->cargar1(10);
$suma->cargar2(30);
$suma->operar();
$suma->imprimir_resultado();

?>