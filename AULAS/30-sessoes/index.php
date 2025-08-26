<?php

/*
sessoes servem p armazenar informações que poderão ser utilizadas em várias páginas,
geralmente usamos sessões pra criar carrinhos de compras, sistema de login...
*/

//primeiro precisamos iniciar a sessão
session_start();

//p criar uma sessão
$_SESSION['cor'] = 'vermelho';
$_SESSION['carro'] = 'civic';

echo $_SESSION['cor'].'<br>'.$_SESSION['carro'].'<br>'.session_id();

