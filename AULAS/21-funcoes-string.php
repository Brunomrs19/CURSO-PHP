<?php

/* 
* strtoupper
* strtolower
* substr
* str_pad
* str_repeat
* strlen
* str_replace
* strpos
*/

//strtoupper = transforma a string em upper case

$nome = "bruno";
$nomeUpper = strtoupper( $nome );

echo $nomeUpper."<hr>";


//strtolower =  transforma a string em lowe case

$cidade = "GOIAS";
$cidadeLower = strtolower( $cidade );

echo $cidadeLower."<hr>";


//substr = serve para pegar uma parte de uma string.

$frase = "Bom dia universo";
$parteFrase = substr( $frase, 0, 3 );

echo $parteFrase."<hr>";


/*str_pad = serve pra preencher uma string até um certo tamanho,
*colocando caracteres extras à esquerda, à direita ou dos dois lados.
*STR_PAD_RIGHT → preenche à direita
*STR_PAD_LEFT → preenche à esquerda
*STR_PAD_BOTH → preenche dos dois lados
*/

$movel = "cama";
$novoMovel = str_pad( $movel, 8, "-", STR_PAD_BOTH );

echo $novoMovel."<hr>";


//str_repeat = ele repete uma string um número definido de vezes. 

$artista = "Matue<br>";
echo str_repeat($artista, 10);
echo "<hr>";


//strlen =  serve para descobrir o tamanho de uma string.

$letra = "Eu vou fazer uma máquina do tempo";
echo strlen($letra);
echo "<hr>";


//str_replace = serve para procurar um texto dentro de uma string e substituir por outro.

$texto = "Eu amo receber flores";
$newText = str_replace("receber", "ganhar", $texto);

echo $newText."<hr>";


//strpos = serve para encontrar a posição da primeira ocorrência de um texto dentro de uma string.

$motivacao = "eu não quero que fique triste ou angustiado";
$posicao = strpos( $motivacao, "quero" );

echo $posicao;