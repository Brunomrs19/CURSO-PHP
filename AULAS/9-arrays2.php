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
//usamos o foreach para percorrer este array.

foreach($clientes as $valor) {
    echo $valor."<br>";
}

/*
“Para cada coisa que tem dentro de $clientes,
me dá esse valor e chama ele de $valor.
Aí eu vou mostrar isso na tela.”

O PHP olha o primeiro nome da lista → "Neymar"
👉 Ele joga esse nome dentro da variável $valor
👉 Manda o echo: aparece Neymar na tela

Vai pro segundo nome → "Pedro"
👉 Joga em $valor
👉 echo mostra Pedro

Vai pro terceiro nome → "Saulo"
👉 Joga em $valor
👉 echo mostra Saulo
*/
