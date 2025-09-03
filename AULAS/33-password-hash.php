<?php

$senha = "123456";
//vamos autenticar a senha
$senha_db = '$2y$10$Z5Bo0oo3.gs0fhSXDrHUPeGJBxN6dq0aAVqXHkftjLsvUAXsmO15G';

if( password_verify($senha, $senha_db)) {
    echo "Senha válida";
} else {
    echo "Senha inválida";
};

/*
$options = [
    'cost' => 10,
];
*/

//usamos o cost pra fazer  o algoritmo rodar internamente por padrão 2^10.
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo $senhaSegura;