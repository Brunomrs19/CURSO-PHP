<?php

$nome = $_POST["nome"];
$email = $_POST["email"];

echo "Seu nome é $nome e seu email é $email <br>";

var_dump($_POST);
//só envia os dados do INPUT, caso coloque um <button type="submit">,
// ele n será inserido na superglobal.