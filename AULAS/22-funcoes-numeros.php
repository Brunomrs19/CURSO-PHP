<?php

/*
    number_format = Formata um número para exibição, definindo quantas casas decimais, separador de decimais e separador de milhar.
    round = Arredonda um número para o inteiro mais próximo
    ceil = Arredonda sempre para cima.
    floor = Arredonda sempre para baixo.
    rand = Gera um número aleatório entre um mínimo e um máximo.
*/

$db = 1234.56;

$preco = number_format( $db, 2, ",", "." );

echo $preco."R$ <hr>";


// round
$brokeNumber = 12.50;

echo round( $brokeNumber );
echo "<hr>";



// ceil e floor

$valor = 7.9;

echo ceil($valor)."<br>";
echo floor($valor)."<br> <hr>";


// rand

echo "O número sorteado é: ".rand(1, 400);



