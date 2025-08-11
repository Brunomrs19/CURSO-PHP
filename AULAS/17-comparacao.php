<?php

/*
* == comparação
* != diferente
* === leva em consideração a tipagem
* !== leva em consideração a tipagem 
* <> diferente
* < menor que
* > maior que
* <= menor ou igual
* >= maior ou igual


* <=> (É um operador de comparação introduzido no PHP 7.
Ele compara dois valores e retorna:
-1 se o valor da esquerda for menor que o da direita,
0 se forem iguais,
1 se o da esquerda for maior que o da direita. )
*/

// esse arquivo é simples, conhecendo os operadores não tem erro, basta trocar os sinais p testar;

$a = 10;

if ( $a === 10 ) {
    echo "Verdade <br>";
} else {
    echo "Mentira <br>";
};



// utilizando spaceship
$numeros = [5, 2, 9, 1, 7];

// usort é uma função que serve pra ordenar arrays indexados, ou seja, listas simples com índices numéricos
// Ordena o array do menor para o maior usando o spaceship operator
usort($numeros, function($a, $b) {
    return $a <=> $b;
});
echo "<pre>";
print_r($numeros);
echo "</pre>";