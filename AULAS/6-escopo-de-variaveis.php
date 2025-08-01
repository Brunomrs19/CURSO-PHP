<?php
//MÁ PRÁTICA DE PROGRAMADOR PHP UTILIZAR A DEFEINIÇÃO GLOBAL.

//ESCOPO GLOBAL
$cidade = "Fortaleza";

//Só funcionará se adicionarmos a variavel no escopo local (na função)
function exibeNome() {
    global $cidade;
    echo $cidade;
};

exibeNome();
echo "<hr>";

//colocando a variável no escopo local

function exibirJogador() {
    // ESCOPO LOCAL
    global $jogador; //assim definimos ela como global
    $jogador = "Doue";
    echo $jogador;
};

exibirJogador();
echo "<br>".$jogador."<hr>";


//NA PRÁTICA 
$a = 1;
$b = 2;
$c = 3;

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
};

soma();

echo "oi";