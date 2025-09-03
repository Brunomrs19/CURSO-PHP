<?php

// criptografia é um conjunto de regras que visa codificar uma informação p que o emissor e recepctor consiga revisar;
/*
base64 = via dupla 
*/

$senha = "BRA123";
$novaSenha = base64_encode($senha); //encode = criptografar

echo "base64: ".$novaSenha."<br>";
echo "Sua senha é: ".base64_decode($novaSenha)."<hr>";

//md5 = como fazer autenticação?
/*
Quando for cadastrar o usuário no sistema, antes de inserir no db passamos o md5,
e cadastramos ela criptografada, e qnd for fazer a comparação vai criptografar essa senha
e vai comparar com a senha que ja foi cadastrada no banco de dados.
*/

echo "md5: ".md5($senha)."<br>";

//sha1 = tbm é criptografia de mão única
echo "sha1: ".sha1($senha);

