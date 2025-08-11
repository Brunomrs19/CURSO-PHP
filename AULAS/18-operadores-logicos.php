<?php

// Usado para fazer comparações entre expressões
// e (&& - and)
// ou (|| - or)
// ou exclusivo (xor)
// negação (!)

$idade = 23;
$nome = "Bruno";

if (( $idade == 23 ) && ( $nome == "Bruno" )) {
    echo "Usuário reconhecido <br>";
};


// ou
if (( $idade == 22) || ( $nome == "Maria" )) {
    echo "Pode ser que sim";
} else {
    echo "Nenhuma expressão é verdadeira <br>";
};


// ou exclusivo = tem que ser um ou outro não pode ser os dois
if (( $idade == 23) xor ( $nome == "Maria" )) {
    echo "Pode ser que sim <br>";
} else {
    echo "Nenhuma expressão é verdadeira";
};


// negaçao
if (!( $idade == 25) and ( $nome = "Bruno")) {
    echo "Olá, Bruno";
};

