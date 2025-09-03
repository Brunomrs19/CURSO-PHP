<?php 
  //header
  include_once'includes/header.php';
  //banco
  include_once'php_action/db_connect.php';
  //select
  if(isset($_GET['id'])) {
    $id = mysqli_real_escape_string($connect, $_GET['id']);
    
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
};
?>

<!-- divs dos formularios pra enviar os dados  -->
  <div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar cliente</h3>
        <form action="php_action/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'] ?>">
                <label for="nome">Nome</label>
            </div>  

            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="Sobrenome" value="<?php echo $dados['sobrenome'] ?>">
                <label for="Sobrenome">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="idade" id="idade" value="<?php echo $dados['idade'] ?>">
                <label for="idade">Idade</label>
            </div>  

            <div class="input-field col s12">
                <input type="text" name="email" id="email" value="<?php echo $dados['email'] ?>">
                <label for="email">Email</label>
            </div>

            <button type="submit" name="btn-editar" class="btn">Atualizar</button >     
            <a href="index.php" type="submit" class="btn green">Lista de clientes</a href="index.php">   
        </form>      
    </div>
  </div>

<?php
  //footer
  include_once'includes/footer.php'
?>