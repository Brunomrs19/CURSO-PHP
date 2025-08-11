<?php
/*
* if
* else
* else if
*/

$idade = 23;

if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
};

echo "<br>";

// com multiplas condições

$nota = 6.9;

if ($nota >= 7) {
    echo "Aprovado";
} else if ($nota < 6) {
    echo "Reprovado";
} else {
    echo "Você está de recuperação";
};
echo "<hr>";

// operador ternário

$valor = 50;

$verificarValor = ( $valor < 50 ) ? "Valor insuficiente" : "Valor suficiente";

echo $verificarValor;