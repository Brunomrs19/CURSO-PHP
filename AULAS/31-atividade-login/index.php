<?php
//conexao
require_once 'db_connect.php'; //serve para incluir o arquivo db_connect.php no seu script.

// sessão

/*
PHP procedural é o jeito mais “puro e direto” de programar em PHP, 
onde você escreve o código em forma de sequência de instruções e funções, 
sem usar classes ou objetos.
*/

// botão enviar
if(isset($_POST['entrar'])) {
    $erros = [];
    //necessário filtrar os dados, então usa a função.
    $login = mysqli_escape_string($connect, $_POST['usuario']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty( $login ) or empty( $senha )) {
        $erros[] = "O campo login/senha está vázio.<br>";
    } else {
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql); //vai armazenar o resultado dessa busca na variavel

        if( mysqli_num_rows($resultado) > 0 ) {
            $senha = md5($senha); //como utilizamos a criptografia md5 no db, então antes de inserir no sql precisamos criptografar
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'"; //Ela busca no banco de dados se existe um usuário com o login e a senha que foram digitados.
            $resultado = mysqli_query($connect, $sql); //resultado da busca

            if( mysqli_num_rows($resultado ) == 1) {                
                $dados = mysqli_fetch_array($resultado); //a busca $sql é atribuida a $resultado e essa função converte em um array e atribui a $dados.                               
                mysqli_close($connect);
                $_SESSION['logado'] = true; //criando sessão
                $_SESSION['id_usuario'] = $dados['id']; //resgatando id do usuario no array
                header('location: home.php'); //header é a função p direcionar
            } else {
                $erros[] = "usuário/senha não confere";
            };
        } else {
            $erros[] = "";
        };
    };

    foreach ($erros as $indice) { 
        echo $indice;
    };
};
?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <hr>
    <H1>Login</H1>

    <div id='login-container'>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="usuario" placeholder="usuário"><br>
        <input type="password" name="senha" placeholder="senha"><br>
        <button type="submit" name="entrar"> Entrar </button>
    </form>
    </div>
    
</body>
</html> 