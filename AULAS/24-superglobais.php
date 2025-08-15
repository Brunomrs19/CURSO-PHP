<?php
//superglobais são variaveis pré-definidas do php (então podemos acessar anyway)

/*
    $GLOBALS = Usada pra acessar variaveis globais em qualquer lugar do script do php (
    ela armazena todas as variaveis globais em um array chamado $globals);

    $_SERVER = uma superglobal que contem informação sobre cabecalhos, caminhos e locais de script 
    (é um array que tem vários índices)

    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/

$x = 2;
$y = 3;

function soma() {
   echo $GLOBALS["x"] + $GLOBALS["y"];
};

soma();
echo "<hr>";


//SERVER


echo $_SERVER["PHP_SELF"]."<br>"; //Vai retornar o nome do script q ta sendo executado no php
echo $_SERVER["SERVER_NAME"]."<br>"; //Retorna o nome do host do servidor
echo $_SERVER["SCRIPT_FILENAME"]."<br>"; //Retorna caminho absoluto do script em execução
echo $_SERVER["DOCUMENT_ROOT"]."<br>"; //Retorna diretorio do script raiz em execução
echo $_SERVER["SERVER_PORT"]."<br>"; //Retorna porta do server web
echo $_SERVER["REMOTE_ADDR"]."<br>"; //Retorna endereço IP de quem acessa a pag