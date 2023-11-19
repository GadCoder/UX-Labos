<?php

class Operaciones
{
    public function CalcularProducto($n1, $n2, $n3, $n4)
    {
        $promedio = 0;
        $promedio = ($n1 + $n2 + $n3 + $n4) / 4;
        echo "<br> El promedio es: $promedio";
        echo ("<br> El promedio es: $promedio");
    }
    public function CalcularFactorial($numfact)
    {
        $acumfact = 1;
        for ($i = 1; $i < $numfact; $i++) {
            $acumfact = $acumfact * $i;
        }
        print("<br>El factorial es: " . $acumfact);
    }
}
$objeto = new Operaciones();
$objeto->CalcularFactorial(5);
$objeto->CalcularProducto(12, 11, 5, 9);
