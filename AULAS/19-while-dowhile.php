<?php

$contador = 1;

//while é um laço (loop) que repete um bloco de código enquanto a condição for verdadeira.

while ( $contador <= 10 ) {
    echo "Contador é $contador<br>";
    $contador++;
};

echo "<hr>";

// do while parecido com while, mas executa o bloco pelo menos 1 vez, mesmo que a condição seja falsa.

$newCount = 1;

do {
    echo "Numero: $newCount <br>";
    $newCount++;
} while ( $newCount <= 10 );
