<?php
  session_start();
  require 'conexao.php';
  
  $cnpj= mysqli_real_escape_string($conexao, preg_replace('/\D/', '', $_POST['cnpj']));

  // consultando se usuario existe
  $sqlSelect = "SELECT * FROM clientes where cnpj = '$cnpj'";
  $query = mysqli_query($conexao, $sqlSelect);

  if(mysqli_num_rows($query)) {
    $_SESSION['mensagem'] = 'Já existe um registro com este CNPJ.';
  } else {
      $nomeFantasia = mysqli_real_escape_string($conexao, $_POST['nomeFantasia']);
      $contribuinte = mysqli_real_escape_string($conexao,$_POST['contribuinte']);
      $telefone= mysqli_real_escape_string($conexao, preg_replace('/\D/', '', $_POST['telefone']));
      $endereco = mysqli_real_escape_string($conexao,$_POST['endereco']);
      $complemento = mysqli_real_escape_string($conexao,$_POST['complemento']);
      $pais = mysqli_real_escape_string($conexao,$_POST['pais']);
      $cep = mysqli_real_escape_string($conexao, preg_replace('/\D/', '', $_POST['cep']));
      $fornecedor = mysqli_real_escape_string($conexao,$_POST['fornecedor']);
      $razaoSocial = mysqli_real_escape_string($conexao,$_POST['razaoSocial']);
      $inscricao = mysqli_real_escape_string($conexao,$_POST['inscricao']); // sem inscrição
      $situacao = mysqli_real_escape_string($conexao,$_POST['situacao']);
      $email = mysqli_real_escape_string($conexao,$_POST['email']);
      $numero = mysqli_real_escape_string($conexao,$_POST['numero']);
      $bairro = mysqli_real_escape_string($conexao,$_POST['bairro']);
      $estado = mysqli_real_escape_string($conexao,$_POST['estado']);
      $municipio = mysqli_real_escape_string($conexao,$_POST['municipio']);
      $ramo = mysqli_real_escape_string($conexao,$_POST['ramo']);
      $nome = mysqli_real_escape_string($conexao,$_POST['nome']);
      $senha = mysqli_real_escape_string($conexao,password_hash($_POST['senha'], PASSWORD_DEFAULT));
        
      $sqlCreate = "INSERT INTO clientes (cnpj, nomeFantasia, contribuinte, telefone, endereco, complemento, pais, cep, fornecedor, razaoSocial, situacao, email, numero, bairro, estado, municipio, ramo, nome, senha) VALUES ('$cnpj', '$nomeFantasia', '$contribuinte', '$telefone', '$endereco', '$complemento', '$pais', '$cep', '$fornecedor', '$razaoSocial', '$situacao', '$email', '$numero', '$bairro', '$estado', '$municipio', '$ramo', '$nome', '$senha')";

      mysqli_query($conexao, $sqlCreate);

      if(mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = 'Usuário criado com sucesso.';
      } else {
        $_SESSION['mensagem'] = 'Usuário não criado.';
      };
    };

    header('Location: index.php');
?>