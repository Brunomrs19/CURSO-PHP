<html>
<body>

    <?php

    //$_FILES podemos acessar dados do arquivo;
    //p pegar a extensao do arquivo usamos PATHINFO

        if(isset($_POST["enviar-arquivo"])) {  //verifica se o button foi clicado
            $formatosPermitidos = ['png', 'jpeg', 'jpg', 'gif'];

            //obtendo extensao de cada arquivo
            $extensao = strtolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));

            //verificando se a extensao é permitida
            if(in_array($extensao, $formatosPermitidos)) {
                $pasta = 'arquivos/'; //onde quero salvar o arquivo
                $temporario = $_FILES['arquivo']['tmp_name']; //local temporario onde o arquivo está armazenado pós upload.
                $novoNome = uniqid().'.'.$extensao; // gera um nome unico p evitar conflitos com mesmo nome.

                //Essa função é específica para uploads em PHP
                //Chama move_uploaded_file($origem_temporaria, $destino_final).
                if(move_uploaded_file($temporario, $pasta.$novoNome) ) {
                  $mensagem = 'Uploado com sucesso';  
                }  
            } else {
                $mensagem = 'Erro ao fazer o upload';
            };

             echo $mensagem;
        };

        /*
        neste código basicamante: o submit faz o upload do arquivo e o restante da função define
        extensao, manda o arquivo pro temporario, gera um nome unico e na função move_uploaded
        ele faz o envio p pasta caso dê tudo certo com as validações e verificações, ou seja,
        o php não envia direto tem todo esse processo.
        */

    ?>




<!-- sempre que for fazer um upload de arquivo, tem q colocar o enctype -->

    <form action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo">
        <button type="submit" name="enviar-arquivo">Enviar</button>
    </form> 

</body>
</html>