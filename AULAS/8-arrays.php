<?php
//Arrays
$carros = ["bmw", "porsche", "civic"];

//echo para exibir array da erro, usa-se print_r;
//pode-se usar quando exibe um índice especifico

//forma de adcionar nova chave, dá pra especificar o índice
$carros[] = "fusca";

echo "<pre>";
print_r($carros);
echo "</pre>";

echo $carros[2];

//outras formas de definir um array

$alternativo = array("exemplo1", "exemplo2", 3);
