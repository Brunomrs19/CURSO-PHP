<?php
    require_once 'db_connect.php';

    $id = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
    mysqli_close($connect);

    // fazendo verificação pra não entrar digitando a URL da página restrita
    if(!isset($_SESSION['logado'])) {
        header('location: index.php');
    };
?>

<html>
<head>
    <title>Página restrita</title>
</head>
<body>
    <h1>Olá <?php echo $dados['nome'] ?> </h1>

    <!-- PRA FAZER LOGOUT -->
    <a href="logout.php">Sair</a>
</body>
</html>