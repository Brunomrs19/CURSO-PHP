<?php
//Conexao
require_once'db_connect.php';

//Inciar sessão
session_start();

if ( isset($_POST["btn-editar"])) {
    $nome = mysqli_real_escape_string($connect, $_POST["nome"]);
    $sobrenome = mysqli_real_escape_string($connect, $_POST["sobrenome"]);
    $idade= mysqli_real_escape_string($connect, $_POST["idade"]);
    $email = mysqli_real_escape_string($connect, $_POST["email"]);
    $id = mysqli_real_escape_string($connect, $_POST["id"]);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

    //$connect = estou informando em qual db fazer a busca e sql é qual busca.
    if(mysqli_query($connect, $sql)) {
        $_SESSION["mensagem"] = "Atualizado com sucesso";
        header('Location: ../index.php'); 
    } else {
        $_SESSION["mensagem"] = "Erro ao atualizar";
        header('location: ../index.php');
    };
};
