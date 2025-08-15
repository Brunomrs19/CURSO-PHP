<?php

//Aqui a função foi criada
function exibirNome($nome, $idade) {
    echo "Meu nome é $nome e tenho $idade anos.";
};

//Aqui chamamos a função
exibirNome("Bruno Mario", 23);
echo "<hr>";

//Criando uma media
function media($nome, $a, $b, $c, $d) {
    $nota = ($a + $b + $c + $d)/4;
    if ($nota >= 7) {
        echo "Parabéns, aprovado!";
    } else {
        echo "Recuperação!";
    };
};

media("Bruno", 6,9, 9.5, 5);