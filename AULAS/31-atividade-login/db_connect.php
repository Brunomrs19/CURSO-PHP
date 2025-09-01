<?php

session_start();
//Conexão com banco de dados


$servername = '127.0.0.1:3307';
$username = 'root'; //usuario padrao do banco
$password = '';
$db_name = 'sistemalogin';

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()) {
    echo 'falha na conexão: '.mysqli_connect_error();
};