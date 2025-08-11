<?php

// Para ter acesso completo das funções, temos o site do php

/*
*algumas funções importantes

*is_array($array) = verifica se realmente é um array
*in_array($valor, $array) = verifica se um determinado valor existe no array
*arrya_keys($array) = retorna um novo array com as chaves virando valor
*array_values($array) = reindexa o array numérico começando do índice 0.
*array_merge($array1, $array2) = agrega o conteúdo dos dois arrays
*array_pop($array) = exclui a ultima posição do array
*array_push($array, "valor", "valor") = add um ou mais elementos no final do array
*array_shift($array) = exclui a primeira posição do array
*array_unshift($arr, "valor") = add um ou mais elementos no inicio do array
*array_combine($keys, $values) = mescla os dois arrays passados
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
echo "<hr>";


//array values

$nomes = [
    "Iluminado" => "Gabi",
    "Banco" => "itaú",
    "Músico" => "Jota"
];

$nomesNum = array_values($nomes);
print_r($nomesNum);
echo "<hr>";


//array merge
$merge = array_merge($keys, $nomes);
print_r($merge);
echo "<hr>";


//array pop
array_pop($nomes);
print_r($nomes);
echo "<hr>";


//array push
array_push($nomes, "Jota"); //ou
$nomes["Campeão"] = "Bask";
print_r($nomes);
echo "<hr>";



//array shift

array_shift($nomes);
print_r($nomes);
echo "<hr>";



//array unshift
array_unshift($nomes, "Gabi");
print_r($nomes); 
echo "<hr>";



//array combine = numero desigual de keys ele retorna error!
$rank = [
    "S+",
    "S",
    "S-",
    "A+"
];

$jogadores = [
    "CR7",
    "Neymar",
    "Messi",
    "Vini"
];

$result = array_combine($rank, $jogadores);
print_r($result);
echo "<hr>";



//array sum
$num = [
    8,
    15,
    19,
    12
];
print_r($num);
echo "<br>";

$somaNum = array_sum($num);
print_r($somaNum);
echo "<hr>";



//explode ou preg_split("/.-\", $string)
$data = "26/10/2001";
$novaData = explode("/", $data);
print_r($novaData);
echo "<hr>";



//implode
$frase = "Boa noite bruno";

//frase virou array, com separador space
$array = explode(  " ", $frase);
print_r($array);
echo "<br>";

//transformando em string
$frase2 = implode(" ",$array);
echo $frase2;