<?php

$clientes = ["Neymar", "Pedro", "Saulo"];

echo "<pre>";
print_r($clientes);
echo "<pre>";

//count = diz quantos elementos há no array;

echo count($clientes);
echo "<br>";
//ou
$qtdClientes = count($clientes);
echo $qtdClientes;

echo "<hr>";

//foreach é uma estrutura de repetição, será visto posteriormente melhor.

foreach($clientes as $valor) {
    echo $valor."<br>";
}