<html>
<body>

<?php
/*
    Funções (filter_input - Filter_var)
    FILTER_SANITIZE_SPECIAL_CHARS = serve pra proteger o formulario de interpretar tags
    FILTER_SANITIZE_NUMBER_INT = Ele limpa e apenas permite numeros, apesar de ser possivel digitar string
    FILTER_SANITIZE_EMAIL = ele limpa caracteres especiais e formaliza o email
    FILTER_SANITIZE_URL = também formaliza a url e remove caracteres n permitidos na url
*/

// mesmo sem preencher os campos do formulario o post cria os índices
?>

<?php

    if(isset($_POST['btn-enviar'])) {
        $erros = [];

        //sanitizando

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);

        //validando

        if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
            $erros[] = "Campo de idade precisa ser um numero inteiro <br>";
        };

        if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            $erros[] = "Campo de email precisa ser um numero inteiro <br>";
        };

        if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
            $erros[] = "Campo de idade precisa ser um numero inteiro <br>";
        };

        


        //Add erros
        if(empty($nome)) {
            $erros[] = 'Nome precisa ser inserido <br>';
        };

        if(empty($idade)) {
            $erros[] = 'idade precisa ser inserido <br>';
        };

        if(empty($email)) {
            $erros[] = 'email precisa ser inserido <br>';
        };

        if(empty($url)) {
            $erros[] = 'url precisa ser inserida <br>';
        };
        

        //Exibindo erros
        if(!empty($erros)) {
            foreach ($erros as $indice) {
                echo $indice;
            } 
        } else {
            echo 'Parabéns está correto';
        };
    };

?>

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    Nome: <input type="text" name="nome"><br>    
    Idade: <input type="text" name="idade"><br>
    Email: <input type="text" name="email"><br>
    URL: <input type="text" name="url"><br>
    <button type="submit" name="btn-enviar"> Enviar </button>
</form>



</body>
</html>

<?php
