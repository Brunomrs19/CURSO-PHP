<?php

/*
* switch
* case
*/

$cor = "vermelho";

// break é obrigatório para evitar que os cases “caiam” para os próximos.
// O default é opcional, serve como “else” se nenhum valor bater.

switch ($cor) {
    case "azul":
        echo "Cor azul";
        break;
    case "vermelho":
        echo "cor vermelha";
        break;
    default:
        echo "cor não identificada";        
};

echo "<hr>";

/*
*Quando você tem muitas condições baseadas no mesmo valor para comparar, tipo várias opções fixas.
*É mais legível que muitos elseif em casos assim.
*Não funciona para condições complexas (ex: >, <), só para comparações de igualdade (==).
*/


$nota = 2;

switch ($nota) {
    case 10;
        echo "Parabéns, gabaritou!";
        break;
    case 5;
        echo "Acertou apenas metade";
        break;
    default:
        echo "Verifique posteriormente, quando tivermos os dados";
};