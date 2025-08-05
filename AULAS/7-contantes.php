<?php
// Constantes é o identificador para um valor único, não pode ser alterado

define("NOME", "Bruno Mário");
define("IDADE", 23);
define("ALTURA", 1.79);
define("CASADO", false);
echo NOME;

echo "<br>"."Meu nome é: ".NOME.", minha idade é: ".IDADE." e eu tenho: ".ALTURA." de altura";


// Como fazer array constante
echo "<hr>";

define("TIMES", ["Flamengo", "Brasiliense", "PSG"]);

echo TIMES[1]." e ";
echo TIMES[0];

// As constantes são sempre globais, diferentemente das variáveis, podendo ser usada em qualquer script.

function exibeNome() {
    echo NOME;
};

exibeNome();