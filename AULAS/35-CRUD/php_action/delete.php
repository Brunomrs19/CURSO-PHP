<?php
//Conexao
require_once'db_connect.php';

//Inciar sessão
session_start();

if ( isset($_POST["btn-deletar"])) {
        $id = mysqli_real_escape_string($connect, $_POST["id"]);
        $sql = "DELETE FROM clientes WHERE id = '$id'";

    //$connect = estou informando em qual db fazer a busca e sql é qual busca.
    if(mysqli_query($connect, $sql)) {
        $_SESSION["mensagem"] = "Deletado com sucesso";
        header('Location: ../index.php'); 
    } else {
        $_SESSION["mensagem"] = "Erro ao deletar";
        header('location: ../index.php');
    };
};
