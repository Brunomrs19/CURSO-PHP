<?php 
  //header
  include_once'includes/header.php'
?>

<!-- divs dos formularios pra enviar os dados  -->
  <div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo cliente</h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>  

            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="Sobrenome">
                <label for="Sobrenome">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="idade" id="idade">
                <label for="idade">Idade</label>
            </div>  

            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>     
            <a href="index.php" type="submit" class="btn green">Lista de clientes</a href="index.php">   
        </form>      
    </div>
  </div>

<?php
  //footer
  include_once'includes/footer.php'
?>