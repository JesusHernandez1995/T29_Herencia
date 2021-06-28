<?php 

/* Ejercicio 7 */

class Electrodomestico{
    private $precio_base;
    private $color;
    private $consumo_energetico;
    private $peso;

    // Constructor de la clase
    public function __construct($price, $color, $consumption, $weight)
    {
        $this->precio_base = $price;
        $this->color = $color;
        $this->consumo_energetico = $consumption;
        $this->peso = $weight;
    }

    // Función get del precio
    public function getPrice()
    {
        return $this->precio_base;
    }

    // Función get del color
    public function getColor()
    {
        return $this->color;
    }

    // Función get del consumo energético
    public function getConsumption()
    {
        return $this->consumo_energetico;
    }

    // Función get del peso
    public function getWeight()
    {
        return $this->peso;
    }

    // Función para comprobar el consumo energético
    public function comprobarConsumoEnergetico($letra)
    {
        $possible_values = 'ABCDEF';
        $letra = strtoupper($letra);
        $pos = strpos($possible_values, $letra);
        // Si la letra no fue encontrada dentro de los valores posibles, entonces asignamos 'F'
        if($pos === false)      return $this->consumo_energetico = 'F';
        else                    return $this->consumo_energetico = $letra; // de lo contrario...
    }

    // Función para comprobar el color del consumo
    public function comprobarColor($color)
    {
        $colores = ["blanco", "negro", "rojo", "azul", "gris"];

        if(!array_search($color, $colores))     return $this->color = 'blanco';
        else                                    return $this->color = $color;
    }

    // Función para determinar el precio final
    public function precioFinal()
    {
        $precio_final = $this->precio_base;

        // Determinamos precio según su consumo
        switch ($this->consumo_energetico) {
            case 'A':
                $precio_final += 100;
                break;
            case 'B':
                $precio_final += 80;
                break;
            case 'C':
                $precio_final += 60;
                break;
            case 'D':
                $precio_final += 50;
                break;
            case 'E':
                $precio_final += 30;
                break;
            case 'F':
                $precio_final += 10;
                break;
            default:
                break;
        }

        // Determinamos precio según su peso
        if ($this->peso >= 0 && $this->peso <= 19) {
            $precio_final += 10;
        }else if ( $this->peso >= 20 && $this->peso <= 49) {
            $precio_final += 50;
        }else if ( $this->peso >= 50 && $this->peso <=79 ) {
            $precio_final += 80;
        }else if ( $this->peso >= 80 ){
            $precio_final += 100;
        }

        return $precio_final;
    }
}

$Lavadora = new Electrodomestico(50, 'azul', 'C', 160);
echo $Lavadora->getPrice();
echo '<br>';
echo $Lavadora->getColor();
echo '<br>';
echo $Lavadora->getConsumption();
echo '<br>';
echo $Lavadora->getWeight();
echo '<br><br>';
echo $Lavadora->comprobarConsumoEnergetico('A');
echo '<br><br>';
echo $Lavadora->comprobarColor('verde');
echo '<br><br>';
echo 'el precio final es '.$Lavadora->precioFinal();
?>