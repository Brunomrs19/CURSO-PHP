<?php

/******* ESCALARES *******/

//string = sequência de caracteres
$nome = "Cristiano";
var_dump($nome);

if(is_string($nome)) {
    echo "é uma string";
};
echo "<hr>";


//int = numeros inteiros;
$valor = -25;
var_dump($valor);

if(is_int($valor)) {
    echo "é uma string";
};
echo "<hr>";


//float = numeros quebrados;
$altura = 1.79;
var_dump($altura);

if(is_float($altura)) {
    echo "é float";
} else {
    echo "não é float";
};
echo "<hr>";


//boolean = apenas YES or NO
$admin = true;
var_dump($admin);
echo "<hr>";



/******* COMPOSTOS *******/

//array = uma variável que amarzena vários valores

$carros = array("gol", "uno", "bmw", "porsche");
var_dump($carros);
echo "<hr>";

//object
class Cliente {
    public $nome;
    public function atribuirNome($nome) {
        $this->$nome = $nome;
    }
};

$cliente = new Cliente();
$cliente->atribuirNome("Bruno");
var_dump($cliente);
echo "<hr>";



/***** ESPECIAIS *******/

//NULL
$vacancia = NULL;
var_dump($vacancia);

//RESOURCE = É um tipo de dado para fazer conexão com banco de dados, manipulação de arquivos.