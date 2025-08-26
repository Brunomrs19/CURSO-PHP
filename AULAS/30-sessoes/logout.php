<?php

session_start();

echo $_SESSION['cor'];

session_unset(); //limpou todas as variaveis da sessao

// Remove apenas a variável 'nome' e 'idade' da sessão
unset($_SESSION['exemplo1']);
unset($_SESSION['exemplo2']);