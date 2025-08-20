<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dados-get.php" method="GET">
        Nome: <input type="text" name="nome"><br>
        Email: <input type="email" name="email"><br>
        <button type="submit"> Enviar </button><br>
        </form>

<!-- também podemos enviar os dados via link -->

    <a href="dados-get.php?idade=25&cidade=brasilia">Enviar dados</a>
    
</body>
</html>