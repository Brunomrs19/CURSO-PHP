<?php

// Para ter acesso completo das funções, temos o site do php

/*
*algumas funções importantes

*is_array($array) = verifica se realmente é um array
*in_array($valor, $array) = verifica se um determinado valor existe no array
*arrya_keys($array) = retorna um novo array com as chaves virando valor
*array_values($array) = retorna um novo array com os valores virando chaves
*array_merge($array1, $array2) = agrega o conteúdo dos dois arrays
*array_pop($array) = exclui a ultima posição do array
*array_shift($array) = exclui a primeira posição do array
*array_unshift($arr, "valor") = add um ou mais elementos no inicio do array
*array_push($array, "valor", "valor") = add um ou mais elementos no final do array
*array_combine($kets, $values) = mescla os dois arrays passados
*array_sum() = calcula a soma dos elementos de um array
*explode("/", "26/10/2001") = transforma string em array
*implode("-", $arr) = transforam array em string
*/

$cores = [
    "verde", 
    "azul",
    "vermelho"
];

print_r( $cores);

//is array
if (is_array($cores)) {
    echo "é array";
};


//in array (1 retorna true e vazio false)
echo in_array("roxo", $cores);
echo "<hr>";


//array keys
$keys = [
    "a",
    "b",
    "c",
    "d"
];

print_r($keys);
echo "<br>";
print_r(array_keys($keys));