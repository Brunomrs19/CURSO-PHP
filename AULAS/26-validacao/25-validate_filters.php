<html>
<body>

<?php
/*
    Funções (filter_input - Filter_var)
    FILTER_VALIDATE_INT
    FILTER_VALIDATE_EMAIL
    FILTER_VALIDATE_FLOAT
    FILTER_VALIDATE_IP
    FILTER_VALIDATE_URL
*/

// mesmo sem preencher os campos do formulario o post cria os índices
?>

<?php
if(isset($_POST["btn-enviar"])) {
    $erros = [];

    //validando
    if(!$idade = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT)) {
        echo "Precisa ser um número inteiro <br>";
    };

    if(!$peso = filter_input(INPUT_POST, "peso", FILTER_VALIDATE_FLOAT)) {
        echo "Precisa ser numero quebrado <br>";
    };

    if(!$ip = filter_input(INPUT_POST, "ip", FILTER_VALIDATE_IP)) {
        echo " ip Inválido <br>";
    };

    if(!$url = filter_input(INPUT_POST, "url", FILTER_VALIDATE_IP)) {
        echo "url inválida <br>";
    };

    //exibindo msg

    if(empty($erros)) {
        echo "Parabéns, tudo correto";
    } else {
        echo "Verifique qual foi o erro";
    };


};




?>

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    Idade: <input type="text" name="idade"><br>
    Peso: <input type="text" name="peso"><br>
    IP: <input type="text" name="ip"><br>
    URL: <input type="text" name="url"><br>
    <button type="submit" name="btn-enviar"> Enviar </button>
</form>



</body>
</html>

<?php

