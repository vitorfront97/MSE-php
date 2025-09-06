<?php 
  if(isset($_SESSION['mensagem'])):
?>
  <span class="mensagem">
    <?= $_SESSION['mensagem'] ?>
  </span>
<?php 
  unset($_SESSION['mensagem']);
  endif;
?>