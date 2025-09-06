<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal MSE - Admin</title>
  <script src="/js/jquery.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="/js/script.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <?php include('mensagem.php');?>
    <section class="header">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-lightning-charge-fill" viewBox="0 0 16 16">
        <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
      </svg>
      <h1>Portal MSE - 2025</h1>
    </section>
    <section class="main">
      <form action="acoes.php" method="POST" id="dadosForm">
        <div class="formTop">
          <div class="esquerda">
            <input onclick="alteraTipoCliente()" type="text" value="Pessoa Jurídica" name="pessoaJuridica" readonly>
            <input type="text" placeholder="CNPJ" id="cnpj" name="cnpj">
            <span class="error"></span>
            <input type="text" placeholder="Nome Fantasia" id="nomeFantasia" name="nomeFantasia" readonly>
            <label for="icms">ICMS:</label>
            <select id="contribuinte" name="contribuinte">
              <option value="" disabled selected></option>
              <option>Contribuinte ICMS</option>
              <option>Contribuinte Insento</option>
              <option>Não Contribuinte</option>
            </select>
            <span class="error"></span>
            <input type="text" placeholder="Telefone" id="telefone" name="telefone" readonly>
            <span class="error"></span>
            <input type="text" placeholder="Endereço" id="endereco" name="endereco" readonly>
            <input type="text" placeholder="Complemento" id="complemento" name="complemento" readonly>
            <input type="text" placeholder="País" id="pais" name="pais" readonly>
            <input type="text" placeholder="CEP" id="cep" name="cep" readonly>
          </div>
          <div class="direita">
            <input type="text" value="Fornecedor" name="fornecedor" readonly>
            <input type="text" placeholder="Razão Social" id="razaoSocial" name="razaoSocial" readonly>
            <input type="text" value="Inscrição Estadual/Isento" name="inscricao" readonly>
            <label for="icms">Situação:</label>
            <input type="text" placeholder="Situação" id="situacao" name="situacao" readonly>
            <input type="text" placeholder="E-mail" id="email" name="email" readonly>
            <span class="error"></span>
            <input type="text" placeholder="Número" id="numero" name="numero" readonly>
            <input type="text" placeholder="Bairro" id="bairro" name="bairro" readonly>
            <input type="text" placeholder="Estado" id="estado" name="estado" readonly>
            <input type="text" placeholder="Município" id="municipio" name="municipio" readonly>
          </div>
        </div>
        <div class="formBottom">
          <div class="fornecedor">
            <h2>Fornecedor de:</h2>
            <div class="tipoFornecedor">
              <input hidden id="fornecedor" name="fornecedor" type="text" value="">
              <input onclick="alteraCheckbox(event)" id="servicos" type="checkbox" name="opcao" value="servicos">
              <label for="servicos">Serviços</label>
              <input onclick="alteraCheckbox(event)" id="materiais" type="checkbox" name="opcao" value="materiais">
              <label for="materiais">Materiais</label>
              <input onclick="alteraCheckbox(event)" id="locacao" type="checkbox" name="opcao" value="locacao">
              <label for="locacao">Locação</label>
            </div>
            <span class="error"></span>
          </div>
          <div class="ramo">
            <h2>Ramo de Atuação</h2>
            <select id="ramo" name="ramo">
              <option value="" disabled selected></option>
              <option>MAQUINAS LINHA AMARELA, TERRAPLANAGEM E ESCAVAÇÃO, LOCAÇÃO DE</option>
              <option>CAMINHÕES PARA TRANSPORTE, LOCAÇÃO DE</option>
              <option>VEICULOS, LOCAÇÃO DE</option>
              <option>GERADORES, LOCAÇÃO DE</option>
              <option>COMPRESSOR DE AR, LOCAÇÃO DE</option>
              <option>MAQUINAS DE FUNDAÇÃO, LOCAÇÃO DE</option>
              <option>ANDAIMES, LOCAÇÃO DE</option>
              <option>CIMBRAMENTO, LOCACAÇÃO DE</option>
              <option>GRUA, ELEVADORES, BALANCIM, LOCAÇÃO DE</option>
              <option>MAQUINAS E FERRAMENTAS, LOCAÇÃO DE</option>
              <option>RÁDIOS, LOCAÇÃO DE</option>
              <option>CONTAINERES, LOCAÇÃO DE</option>
              <option>SANITÁRIOS E BANHEIROS, LOCAÇÃO DE</option>
              <option>PLATAFORMAS, PTA, LOCAÇÃO DE</option>
              <option>INSTRUMENTOS, LOCAÇÃO DE</option>
              <option>MOVEIS, LOCAÇÃO DE</option>
              <option>IMÓVEIS, LOCAÇÃO DE</option>
              <option>EPI, EPC E UNIFORMES, FORNECIMENTO DE</option>
              <option>FERRAMENTAS, CONSUMIVEIS E MAQUINAS ELÉTRICAS, FORNECIMENTO DE</option>
              <option>COMPUTADORES E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>MÓVEIS E UTENSILIOS, FORNECIMENTO DE</option>
              <option>PAPELARIA, FORNECIMENTO DE ITENS DE</option>
              <option>BOMBAS, FORNECIMENTO DE</option>
              <option>GERADORES DE ENERGIA, FORNECIMENTO DE</option>
              <option>TRANSFORMADORES, FORNECIMENTO DE</option>
              <option>ELETROCALHAS, PERFILADOS, LEITOS E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>ELETRODUTOS E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>MOTORES ELÉTRICOS E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>LUMINÁRIAS, LAMPADAS E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>POSTES E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>TUBOS DE AÇO CARBONO E CONEXÕES, FORNECIMENTO DE</option>
              <option>TUBOS DE AÇÕ INOX E CONEXÕES, FORNECIMENTO DE</option>
              <option>SUPORTAÇÃO E FIXAÇÃO, ITENS, FORNECIMENTO DE</option>
              <option>VÁLVULAS E CONEXÕES, FORNECIMENTO DE</option>
              <option>INCÊNDIO, BICOS SPK, ACOPLAMENTOS, ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>DUTOS CORRUGADOS E CONEXOES, FORNECIMENTO DE</option>
              <option>CAIXAS PRÉ-FABRICADAS E MANILHAS DE CONCRETO, FORNECIMENTO DE</option>
              <option>PAINÉIS, QUADROS ELÉTRICOS, CHAPARIA E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>AUTOMAÇÃO, INSTRUMENTAÇÃO, EQUIPAMENTOS DE, FORNECIMENTO DE</option>
              <option>BARRAMENTO BLINDADO E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>CABOS, CONDUTORES ELÉTRICOS, CABOS DE SINAL, FORNECIMENTO DE</option>
              <option>EXD, COMPONENTES A PROVA DE EXPLOSÃO, FORNECIMENTO DE</option>
              <option>SPDA, ATERRAMENTO, PARA-RAIOS, ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>MÉDIA TENSÃO, CABINES, EQUIPAMENTOS E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>MATERIAIS PARA CONSTRUÇÃO CIVIL EM GERAL, FORNECIMENTO DE</option>
              <option>MATERIAIS ELÉTRICOS DIVERSOS, FORNECIMENTO DE</option>
              <option>MATERIAIS HIDRAULICOS DIVERSOS, FORNECIMENTO DE</option>
              <option>TUBOS E CONEXÕES DE PVC, CPVC, PEAD, PPR, FORNECIMENTO DE</option>
              <option>PRÉ-MOLDADOS, ELEMENTOS DE CONCRETO, POSTES, ETC, FORNECIMENTO DE</option>
              <option>FERRO E AÇO, CHAPAS, VERGALHÕES, PERFIS, ETC, FORNECIMENTO DE</option>
              <option>ALARME DE INCÊNDIO, INTRUSÃO, CONTROLE DE ACESSO, FORNECIMENTO DE</option>
              <option>TUBOS E CONEXÕES DE COBRE, FORNECIMENTO DE</option>
              <option>TINTAS E ACESSÓRIOS DE PINTURA, FORNECIMENTO DE</option>
              <option>GRELHAS, DIFUSORES, DUTOS, DAMPER E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>AHU, FANCOIL, VRF, ROOFTOP, E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>CHILLER, FORNECIMENTO DE</option>
              <option>LOUÇAS E METAIS SANITÁRIOS, FORNECIMENTO DE</option>
              <option>SISTEMA SIFONADO, GEBERIT, MEXICHEM, EPAMS, ETC, FORNECIMENTO DE</option>
              <option>FERRO FUNDIDO, K7, K9, PAM, ETC, FORNECIMENTO DE</option>
              <option>TORRE DE RESFRIAMENTO E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>FILTROS E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>ABRIGOS DE MANGUEIRA, HIDRANTES E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>BARRAMENTO DE COBRE NU, BARRAMENTO DE ALUMINIO, ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>NO-BREAK, UPS, ESTABILIZADOR, ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>MATERIAIS DE ESCRITÓRIO, PAPELARIA, ETC, FORNECIMENTO DE</option>
              <option>PRODUTOS DE MERCEARIA, LIMPEZA, ETC, FORNECIMENTO DE</option>
              <option>COMBUSTIVEIS, LUBRIFICANTES, FILTROS, FORNECIMENTO DE</option>
              <option>CONDULETES, CAIXAS DE PASSAGEM, ACESSÓRIOS EM ALUMINIO, FORNECIMENTO DE</option>
              <option>CANALETAS EM ALUMINIO E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>RABICHOS INJETADOS, CONECTORES, PLUGS E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>TOMADAS E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option>VENTILADORES, EXAUSTORES, SOPRADORES, ETC, FORNECIMENTO DE</option>
              <option>PEÇAS PARA MANUTENÇÃO DE VEICULOS, FORNECIMENTO DE</option>
              <option>RESERVATÓRIOS METÁLICOS, TANQUES, FORNECIMENTO DE</option>
              <option>VALVULAS, FLANGES E CONEXÕES, FORNECIMENTO DE</option>
              <option>BRINDES, MATERIAL DE MARKETING, FORNECIMENTO DE</option>
              <option>MATERIAL GRAFICO, PLACAS, SINALIZAÇÃO, FORNECIMENTO DE</option>
              <option>INSTALAÇÕES ELÉTRICAS DE BT</option>
              <option>INSTALAÇÕES ELÉTRICAS DE MT</option>
              <option>INSTALAÇÕES DE COMBATE A INCÊNDIO, HIDRANTES E SPRINKLER</option>
              <option>INSTALAÇÕES HIDRAULICAS DE PVC, PEAD, CPVC, ETC.</option>
              <option>INSTALAÇÕES HIDRAULICAS DE AÇO CARBONO, INOX, ETC.</option>
              <option>EQUIPAMENTOS PESADOS, MONTAGEM DE</option>
              <option>GASES INDUSTRIAIS, MONTAGEM DE</option>
              <option>CLEAN UTILITIES, MONTAGEM DE</option>
              <option>DUTOS DE AR CONDICIONADO, MONTAGEM DE</option>
              <option>ISOLAMENTO TÉRMICO, MONTAGEM DE</option>
              <option>ANDAIMES E CIMBRAMENTO, MONTAGEM DE</option>
              <option>TANQUES DE AÇO, MONTAGEM DE</option>
              <option>ALVENARIA, EXECUÇÃO DE</option>
              <option>FORMAS E LAJES, MONTAGEM DE</option>
              <option>PAVIMENTAÇÃO, EXECUCAÇÃO DE</option>
              <option>PISOS DE CONCRETO, EXECUÇÃO DE</option>
              <option>PINTURA DE ALVENARIA, EXECUÇÃO DE</option>
              <option>PINTURA INDUSTRIAL DE TUBULAÇÕES E ESTRUTURAS METÁLICAS, EXECUÇÃO DE</option>
              <option>STEEL FRAME, MONTAGEM DE</option>
              <option>DRYWALL, MONTAGEM DE</option>
              <option>ESTRUTURA METÁLICA, MONTAGEM DE</option>
              <option>TERRAPLANAGEM, EXECUÇÃO DE</option>
              <option>IMPERMEABILIZAÇÃO, EXECUÇÃO DE</option>
              <option>LIMPEZA, SERVIÇOS DE</option>
              <option>TRANSPORTE, SERVIÇOS DE</option>
              <option>MONITORAMENTO, SEGURANÇA PATRIMONIAL, SERVIÇOS DE</option>
              <option>TREINAMENTO, CURSOS, SERVIÇOS DE</option>
              <option>HOSPEDAGEM, SERVIÇOS DE</option>
              <option>REFEIÇÃO, SERVIÇOS DE</option>
              <option>COMUNICAÇÃO, PROPAGANDA, MARKETING, SERVIÇOS DE</option>
              <option>CALIBRAÇÃO DE EQUIPAMENTOS, SERVIÇOS DE</option>
              <option>JARDINAGEM, PAISAGISMO, ETC, SERVIÇOS DE</option>
              <option>CERTIFICAÇÃO, INSPEÇÃO, QUALIDADE, CALIBRAGEM, ETC, SERVIÇOS DE</option>
              <option>EXAMES, SERVIÇOS MÉDICOS E HOSPITALARES, SERVIÇOS DE</option>
              <option>PROJETOS, CONSULTORIAS, LAUDOS, SERVIÇOS DE</option>
              <option>ADVOCACIA, CONTABILIDADE, ASSESSORIA, SERVIÇOS DE</option>
              <option>TI, PROGRAMAÇÃO, IMPLANTAÇÃO, SERVIÇOS DE</option>
            </select>
            <span class="error"></span>
          </div>
          <div class="login">
            <div class="loginEsq">
              <input id="cnpjLogin" type="text" placeholder="CNPJ">
              <span class="error"></span>
              <input id="senha" type="password" placeholder="Senha" name="senha">
              <div id="verSenha" class="verSenha">
                <i onclick="verSenha(event, 'senha')" class="bi bi-eye-slash-fill"></i>
              </div>
              <span class="error"></span>
            </div>
            <div class="loginDir">
              <input id="nome" type="text" placeholder="Nome" name="nome">
              <span class="error"></span>
              <input id="senhaRep" type="password" placeholder="Repetir Senha" name="senhaRep">
              <div id="verSenhaRep" class="verSenha">
                <i onclick="verSenha(event, 'senhaRep')" class="bi bi-eye-slash-fill"></i>
              </div>
              <span class="error"></span>
            </div>
          </div>
        </div>
        <button class="btnForm" name="btnForm" type="submit">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
          </svg>
          Cadastrar
        </button>
      </form>
    </section>
    <footer>
      <section class="footerTop">
        <div class="top">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-buildings-fill" viewBox="0 0 16 16">
            <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1h-1zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z"/>
          </svg>
          <h2>Para ser um Fornecedor MSE</h2>
        </div>
        <span>Cadastre-se aqui</span>
      </section>
      <section class="footerBottom">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
        </svg>
        <h2>Você é colaborador da MSE?</h2>
      </section>
      <small style="color: #c0bcbc">2025 &copy; Portal MSE - 2025 3.5.3</small>
    </footer>
  </main>
  <script>
    
  </script>
</body>
</html>