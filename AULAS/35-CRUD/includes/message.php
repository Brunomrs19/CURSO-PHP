<?php
//session
  session_start();

?>

<script>
  // essa função é executada qnd toda a página está carregada
  window.onload = function() {
    M.toast({html: '<?php echo $_SESSION['mensagem'] ?>'})
  };
</script>

<?php
  if( isset($_SESSION["mensagem"] )) {
   };
  session_unset();
?>