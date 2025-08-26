<html>
<body>

     <?php
        if(isset($_POST['enviar-formulario'])) {
            $arquivosPermitidos = ['jpeg', 'jpg', 'png', 'gif'];
            $qtdArquivos = count($_FILES['arquivo']['name']);
            $contador = 0;

            while ( $contador < $qtdArquivos) {

            $extensao = strtolower(pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION));
            //também precisa do contador pois, não dá pra pegar a extensão de um array, precisamos da string.

            $pasta = 'uploads/';
            $temporario = $_FILES['arquivo']['tmp_name'][$contador];
            //Necessario $contador pois, a função de mover o arquivo upload precisa de uma string não um array.
            $novoNome = uniqid().'.'.$extensao;

            if(move_uploaded_file($temporario, $pasta.$novoNome)) {
                $mensagem = 'Uploads efetuados com sucesso';
            } else {
                $mensagem = 'Deu ruim';
            };

            $contador++;
            };

        echo $mensagem;

        };

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" multiple> <!-- Como é escolha multipla então é enviada como array-->
        <input type="submit" name="enviar-formulario">
    </form>
    
</body>
</html>