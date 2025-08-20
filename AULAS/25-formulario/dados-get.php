<?php

$nome = $_GET["nome"];
$email = $_GET["email"];

echo "Nome: $nome, email: $email";

//Get envia dados via URL
//post e get "são" na verdade um array

echo $_GET["idade"]."<br>".$_GET["cidade"];

/*
Dá erro pois, qnd clicamos no link ele apenas envia os mesmos, logo o formulario n é enviado
quando ele tenta executar as linhas 3 e 4, procura pelas chaves "nome" e "email" no array GET
mas elas não existem, porque não foi enviado o formulário que contém os valores.
*/

//não devemos confiar nos dados dos usuários,sempre que tiver uma entrada de dados,
//precisamos filtrar por segurança.