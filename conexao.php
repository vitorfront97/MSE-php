<?php 
  define('HOST', 'localhost');
  define('USUARIO', 'root');
  define('SENHA', '1234');
  define('DB', 'mse');

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  try {
      $conexao = new mysqli(HOST, USUARIO, SENHA, DB);
      echo "Conexão realizada com sucesso!";
  } catch (Exception $e) {
      echo "Erro na conexão: " . $e->getMessage();
  }
?>