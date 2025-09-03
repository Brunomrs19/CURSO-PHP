<?php
//Conexao
require_once'db_connect.php';

//Inciar sessão
session_start();

if ( isset($_POST["btn-cadastrar"])) {
    $nome = mysqli_real_escape_string($connect, $_POST["nome"]);
    $sobrenome = mysqli_real_escape_string($connect, $_POST["sobrenome"]);
    $idade= mysqli_real_escape_string($connect, $_POST["idade"]);
    $email = mysqli_real_escape_string($connect, $_POST["email"]);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

    //$connect = estou informando em qual db fazer a busca e sql é qual busca.
    if(mysqli_query($connect, $sql)) {
        $_SESSION["mensagem"] = "Cadastrado com sucesso";
        header('Location: ../index.php'); 
    } else {
        $_SESSION["mensagem"] = "Erro ao cadastrar";
        header('location: ../index.php');
    };
};
