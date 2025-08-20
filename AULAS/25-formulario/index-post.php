<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <!-- action é o endereço de destino para onde os dados do formulário serão enviados. -->
    <!-- method é a maneira ou o método que você vai usar para entregar o formulário. -->
    <form action="dados-post.php" method="POST">
        Nome: <input typer="text" name="nome"><br>
        Email: <input type="email" name="email"><br>
        <input type="submit" name="enviar">
    </form>

    <!-- POST: É como se você colocasse o formulário preenchido dentro de um envelope 
    e o entregasse. As informações ficam "escondidas" e seguras dentro do envelope 
    (ou seja, não aparecem na barra de endereço do navegador).
    O método POST é ideal para enviar dados sensíveis, como senhas,
    ou grandes volumes de informação. -->

    <!-- GET: É como se você segurasse o formulário preenchido na sua mão, à vista de todos,
    e o entregasse. As informações são anexadas ao endereço na barra de URL do navegador.
    Por exemplo, a URL poderia ficar algo como dados.php?nome=joao&email=joao@exemplo.com.
    O método GET é bom para buscas e para criar links que podem ser compartilhados. -->

</body>
</html>

