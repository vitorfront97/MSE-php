<?php
  header("Content-Type: application/json; charset=UTF-8");

  // Validação do CNPJ recebido
  if (!isset($_GET['cnpj'])) {
      echo json_encode(["erro" => "CNPJ não informado"]);
      exit;
  }

  $cnpj = $_GET['cnpj'];
  $url = "https://www.receitaws.com.br/v1/cnpj/" . $cnpj;

  // Inicializa cURL
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // desativa verificação SSL (se der erro no local)
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0"); // alguns servidores exigem user-agent

  $response = curl_exec($ch);

  // Tratamento de erro cURL
  if (curl_errno($ch)) {
      echo json_encode(["erro" => "Erro na requisição cURL: " . curl_error($ch)]);
      curl_close($ch);
      exit;
  }

  curl_close($ch);

  // Retorna a resposta da ReceitaWS diretamente
  echo $response;

?>
