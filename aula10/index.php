<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// function somaDoisValores ($valor1 = 0, $valor2 = 0)
// {
//     $resultado = $valor1 + $valor2;
//     return $resultado
// }

function somaDoisValores ($lista)
{
    $soma = 0;
    foreach ($listavariable as $valor) {
        $soma += $valor
    }
    return $soma;
}

// $valorRetornado = somaDoisValores(10, 20);
$valorRetornado = somaDoisValores([10, 20, 30]);

var_dump($valorRetornado * 30);