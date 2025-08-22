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
        $erros[] = "Precisa ser um número inteiro <br>";
    }

    if(!$peso = filter_input(INPUT_POST, "peso", FILTER_VALIDATE_FLOAT)) {
        $erros[] = "Precisa ser numero quebrado <br>";
    };

    if(!$ip = filter_input(INPUT_POST, "ip", FILTER_VALIDATE_IP)) {
        $erros[] = " ip Inválido <br>";
    };

    //exibindo msg

    if(empty($erros)) {
        echo "Parabéns, tudo correto";
    } else {
        foreach ($erros as $indices) {
            echo $indices;
        };
    };


};




?>

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    Idade: <input type="text" name="idade"><br>
    Peso: <input type="text" name="peso"><br>
    IP: <input type="text" name="ip"><br>
    <button type="submit" name="btn-enviar"> Enviar </button>
</form>



</body>
</html>

<?php

