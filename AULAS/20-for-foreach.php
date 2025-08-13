<?php

//for = quando sabemos antecipadamente o numero de repetições
//estrutura de repetição com declaração, condição e incremento.

//vamos fazer uma tabuada como exemplo.

for ($contador = 0; $contador <= 10; $contador++) {
     echo " 8 x $contador = ".(8 * $contador)."<br>";
};

echo "<hr>";

//foreach = usado para percorrer array
$cores = ["Flamengo", "Cruzeiro", "Internacional"];


foreach ($cores as $indices => $valor) {
    echo $indices." = ".$valor."<br>";
};
//ele percorre o array atribuindo os itens como $valor
// caso queria adicionar o índice basta mudar a sintaxe ($cores as $indice => $valor);

