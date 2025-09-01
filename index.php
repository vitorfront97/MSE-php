<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal MSE - Admin</title>
  <link rel="stylesheet" href="style.css">
  <script src="/js/jquery.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="/js/script.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
  <main>
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
            <input type="text" value="Pessoa Jurídica" name="pessoaJuridica" readonly>
            <input type="text" placeholder="CNPJ" id="cnpj" name="cnpj">
            <input type="text" placeholder="Nome Fantasia" id="nomeFantasia" name="nomeFantasia" readonly>
            <label for="icms">ICMS:</label>
            <select id="contribuinte" name="contribuinte">
              <option>Contribuinte ICMS</option>
              <option>Contribuinte Insento</option>
              <option>Não Contribuinte</option>
            </select>
            <input type="text" placeholder="Telefone" id="telefone" name="telefone" readonly>
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
              <input onclick="alteraCheckbox(event)" id="servicos" type="checkbox" name="servicos">
              <label for="servicos">Serviços</label>
              <input onclick="alteraCheckbox(event)" id="materiais" type="checkbox" name="materiais">
              <label for="materiais">Materiais</label>
              <input onclick="alteraCheckbox(event)" id="locacao" type="checkbox" name="locacao">
              <label for="locacao">Locação</label>
            </div>
          </div>
          <div class="ramo">
            <h2>Ramo de Atuação</h2>
            <select id="ramo" name="ramo">
              <option value="1" class="Locação" data-ramo="Locação">MAQUINAS LINHA AMARELA, TERRAPLANAGEM E ESCAVAÇÃO, LOCAÇÃO DE</option>
              <option value="2" class="Locação" data-ramo="Locação">CAMINHÕES PARA TRANSPORTE, LOCAÇÃO DE</option>
              <option value="3" class="Locação" data-ramo="Locação">VEICULOS, LOCAÇÃO DE</option>
              <option value="4" class="Locação" data-ramo="Locação">GERADORES, LOCAÇÃO DE</option>
              <option value="5" class="Locação" data-ramo="Locação">COMPRESSOR DE AR, LOCAÇÃO DE</option>
              <option value="6" class="Locação" data-ramo="Locação">MAQUINAS DE FUNDAÇÃO, LOCAÇÃO DE</option>
              <option value="7" class="Locação" data-ramo="Locação">ANDAIMES, LOCAÇÃO DE</option>
              <option value="8" class="Locação" data-ramo="Locação">CIMBRAMENTO, LOCACAÇÃO DE</option>
              <option value="9" class="Locação" data-ramo="Locação">GRUA, ELEVADORES, BALANCIM, LOCAÇÃO DE</option>
              <option value="10" class="Locação" data-ramo="Locação">MAQUINAS E FERRAMENTAS, LOCAÇÃO DE</option>
              <option value="11" class="Locação" data-ramo="Locação">RÁDIOS, LOCAÇÃO DE</option>
              <option value="12" class="Locação" data-ramo="Locação">CONTAINERES, LOCAÇÃO DE</option>
              <option value="13" class="Locação" data-ramo="Locação">SANITÁRIOS E BANHEIROS, LOCAÇÃO DE</option>
              <option value="14" class="Locação" data-ramo="Locação">PLATAFORMAS, PTA, LOCAÇÃO DE</option>
              <option value="15" class="Locação" data-ramo="Locação">INSTRUMENTOS, LOCAÇÃO DE</option>
              <option value="16" class="Locação" data-ramo="Locação">MOVEIS, LOCAÇÃO DE</option>
              <option value="17" class="Locação" data-ramo="Locação">IMÓVEIS, LOCAÇÃO DE</option>
              <option value="1" class="Materiais" data-ramo="Materiais">EPI, EPC E UNIFORMES, FORNECIMENTO DE</option>
              <option value="2" class="Materiais" data-ramo="Materiais">FERRAMENTAS, CONSUMIVEIS E MAQUINAS ELÉTRICAS, FORNECIMENTO DE</option>
              <option value="3" class="Materiais" data-ramo="Materiais">COMPUTADORES E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="4" class="Materiais" data-ramo="Materiais">MÓVEIS E UTENSILIOS, FORNECIMENTO DE</option>
              <option value="5" class="Materiais" data-ramo="Materiais">PAPELARIA, FORNECIMENTO DE ITENS DE</option>
              <option value="6" class="Materiais" data-ramo="Materiais">BOMBAS, FORNECIMENTO DE</option>
              <option value="7" class="Materiais" data-ramo="Materiais">GERADORES DE ENERGIA, FORNECIMENTO DE</option>
              <option value="8" class="Materiais" data-ramo="Materiais">TRANSFORMADORES, FORNECIMENTO DE</option>
              <option value="9" class="Materiais" data-ramo="Materiais">ELETROCALHAS, PERFILADOS, LEITOS E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="10" class="Materiais" data-ramo="Materiais">ELETRODUTOS E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="11" class="Materiais" data-ramo="Materiais">MOTORES ELÉTRICOS E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="12" class="Materiais" data-ramo="Materiais">LUMINÁRIAS, LAMPADAS E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="13" class="Materiais" data-ramo="Materiais">POSTES E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="14" class="Materiais" data-ramo="Materiais">TUBOS DE AÇO CARBONO E CONEXÕES, FORNECIMENTO DE</option>
              <option value="15" class="Materiais" data-ramo="Materiais">TUBOS DE AÇÕ INOX E CONEXÕES, FORNECIMENTO DE</option>
              <option value="16" class="Materiais" data-ramo="Materiais">SUPORTAÇÃO E FIXAÇÃO, ITENS, FORNECIMENTO DE</option>
              <option value="17" class="Materiais" data-ramo="Materiais">VÁLVULAS E CONEXÕES, FORNECIMENTO DE</option>
              <option value="18" class="Materiais" data-ramo="Materiais">INCÊNDIO, BICOS SPK, ACOPLAMENTOS, ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="19" class="Materiais" data-ramo="Materiais">DUTOS CORRUGADOS E CONEXOES, FORNECIMENTO DE</option>
              <option value="20" class="Materiais" data-ramo="Materiais">CAIXAS PRÉ-FABRICADAS E MANILHAS DE CONCRETO, FORNECIMENTO DE</option>
              <option value="21" class="Materiais" data-ramo="Materiais">PAINÉIS, QUADROS ELÉTRICOS, CHAPARIA E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="22" class="Materiais" data-ramo="Materiais">AUTOMAÇÃO, INSTRUMENTAÇÃO, EQUIPAMENTOS DE, FORNECIMENTO DE</option>
              <option value="23" class="Materiais" data-ramo="Materiais">BARRAMENTO BLINDADO E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="24" class="Materiais" data-ramo="Materiais">CABOS, CONDUTORES ELÉTRICOS, CABOS DE SINAL, FORNECIMENTO DE</option>
              <option value="25" class="Materiais" data-ramo="Materiais">EXD, COMPONENTES A PROVA DE EXPLOSÃO, FORNECIMENTO DE</option>
              <option value="26" class="Materiais" data-ramo="Materiais">SPDA, ATERRAMENTO, PARA-RAIOS, ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="27" class="Materiais" data-ramo="Materiais">MÉDIA TENSÃO, CABINES, EQUIPAMENTOS E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="28" class="Materiais" data-ramo="Materiais">MATERIAIS PARA CONSTRUÇÃO CIVIL EM GERAL, FORNECIMENTO DE</option>
              <option value="29" class="Materiais" data-ramo="Materiais">MATERIAIS ELÉTRICOS DIVERSOS, FORNECIMENTO DE</option>
              <option value="30" class="Materiais" data-ramo="Materiais">MATERIAIS HIDRAULICOS DIVERSOS, FORNECIMENTO DE</option>
              <option value="31" class="Materiais" data-ramo="Materiais">TUBOS E CONEXÕES DE PVC, CPVC, PEAD, PPR, FORNECIMENTO DE</option>
              <option value="32" class="Materiais" data-ramo="Materiais">PRÉ-MOLDADOS, ELEMENTOS DE CONCRETO, POSTES, ETC, FORNECIMENTO DE</option>
              <option value="33" class="Materiais" data-ramo="Materiais">FERRO E AÇO, CHAPAS, VERGALHÕES, PERFIS, ETC, FORNECIMENTO DE</option>
              <option value="34" class="Materiais" data-ramo="Materiais">ALARME DE INCÊNDIO, INTRUSÃO, CONTROLE DE ACESSO, FORNECIMENTO DE</option>
              <option value="35" class="Materiais" data-ramo="Materiais">TUBOS E CONEXÕES DE COBRE, FORNECIMENTO DE</option>
              <option value="36" class="Materiais" data-ramo="Materiais">TINTAS E ACESSÓRIOS DE PINTURA, FORNECIMENTO DE</option>
              <option value="37" class="Materiais" data-ramo="Materiais">GRELHAS, DIFUSORES, DUTOS, DAMPER E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="38" class="Materiais" data-ramo="Materiais">AHU, FANCOIL, VRF, ROOFTOP, E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="39" class="Materiais" data-ramo="Materiais">CHILLER, FORNECIMENTO DE</option>
              <option value="40" class="Materiais" data-ramo="Materiais">LOUÇAS E METAIS SANITÁRIOS, FORNECIMENTO DE</option>
              <option value="41" class="Materiais" data-ramo="Materiais">SISTEMA SIFONADO, GEBERIT, MEXICHEM, EPAMS, ETC, FORNECIMENTO DE</option>
              <option value="42" class="Materiais" data-ramo="Materiais">FERRO FUNDIDO, K7, K9, PAM, ETC, FORNECIMENTO DE</option>
              <option value="43" class="Materiais" data-ramo="Materiais">TORRE DE RESFRIAMENTO E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="44" class="Materiais" data-ramo="Materiais">FILTROS E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="45" class="Materiais" data-ramo="Materiais">ABRIGOS DE MANGUEIRA, HIDRANTES E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="46" class="Materiais" data-ramo="Materiais">BARRAMENTO DE COBRE NU, BARRAMENTO DE ALUMINIO, ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="47" class="Materiais" data-ramo="Materiais">NO-BREAK, UPS, ESTABILIZADOR, ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="48" class="Materiais" data-ramo="Materiais">MATERIAIS DE ESCRITÓRIO, PAPELARIA, ETC, FORNECIMENTO DE</option>
              <option value="49" class="Materiais" data-ramo="Materiais">PRODUTOS DE MERCEARIA, LIMPEZA, ETC, FORNECIMENTO DE</option>
              <option value="50" class="Materiais" data-ramo="Materiais">COMBUSTIVEIS, LUBRIFICANTES, FILTROS, FORNECIMENTO DE</option>
              <option value="51" class="Materiais" data-ramo="Materiais">CONDULETES, CAIXAS DE PASSAGEM, ACESSÓRIOS EM ALUMINIO, FORNECIMENTO DE</option>
              <option value="52" class="Materiais" data-ramo="Materiais">CANALETAS EM ALUMINIO E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="53" class="Materiais" data-ramo="Materiais">RABICHOS INJETADOS, CONECTORES, PLUGS E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="54" class="Materiais" data-ramo="Materiais">TOMADAS E ACESSÓRIOS, FORNECIMENTO DE</option>
              <option value="55" class="Materiais" data-ramo="Materiais">VENTILADORES, EXAUSTORES, SOPRADORES, ETC, FORNECIMENTO DE</option>
              <option value="56" class="Materiais" data-ramo="Materiais">PEÇAS PARA MANUTENÇÃO DE VEICULOS, FORNECIMENTO DE</option>
              <option value="57" class="Materiais" data-ramo="Materiais">RESERVATÓRIOS METÁLICOS, TANQUES, FORNECIMENTO DE</option>
              <option value="58" class="Materiais" data-ramo="Materiais">VALVULAS, FLANGES E CONEXÕES, FORNECIMENTO DE</option>
              <option value="59" class="Materiais" data-ramo="Materiais">BRINDES, MATERIAL DE MARKETING, FORNECIMENTO DE</option>
              <option value="60" class="Materiais" data-ramo="Materiais">MATERIAL GRAFICO, PLACAS, SINALIZAÇÃO, FORNECIMENTO DE</option>
              <option value="1" class="Serviços" data-ramo="Serviços">INSTALAÇÕES ELÉTRICAS DE BT</option>
              <option value="2" class="Serviços" data-ramo="Serviços">INSTALAÇÕES ELÉTRICAS DE MT</option>
              <option value="3" class="Serviços" data-ramo="Serviços">INSTALAÇÕES DE COMBATE A INCÊNDIO, HIDRANTES E SPRINKLER</option>
              <option value="4" class="Serviços" data-ramo="Serviços">INSTALAÇÕES HIDRAULICAS DE PVC, PEAD, CPVC, ETC.</option>
              <option value="5" class="Serviços" data-ramo="Serviços">INSTALAÇÕES HIDRAULICAS DE AÇO CARBONO, INOX, ETC.</option>
              <option value="6" class="Serviços" data-ramo="Serviços">EQUIPAMENTOS PESADOS, MONTAGEM DE</option>
              <option value="7" class="Serviços" data-ramo="Serviços">GASES INDUSTRIAIS, MONTAGEM DE</option>
              <option value="8" class="Serviços" data-ramo="Serviços">CLEAN UTILITIES, MONTAGEM DE</option>
              <option value="9" class="Serviços" data-ramo="Serviços">DUTOS DE AR CONDICIONADO, MONTAGEM DE</option>
              <option value="10" class="Serviços" data-ramo="Serviços">ISOLAMENTO TÉRMICO, MONTAGEM DE</option>
              <option value="11" class="Serviços" data-ramo="Serviços">ANDAIMES E CIMBRAMENTO, MONTAGEM DE</option>
              <option value="12" class="Serviços" data-ramo="Serviços">TANQUES DE AÇO, MONTAGEM DE</option>
              <option value="13" class="Serviços" data-ramo="Serviços">ALVENARIA, EXECUÇÃO DE</option>
              <option value="14" class="Serviços" data-ramo="Serviços">FORMAS E LAJES, MONTAGEM DE</option>
              <option value="15" class="Serviços" data-ramo="Serviços">PAVIMENTAÇÃO, EXECUCAÇÃO DE</option>
              <option value="16" class="Serviços" data-ramo="Serviços">PISOS DE CONCRETO, EXECUÇÃO DE</option>
              <option value="17" class="Serviços" data-ramo="Serviços">PINTURA DE ALVENARIA, EXECUÇÃO DE</option>
              <option value="18" class="Serviços" data-ramo="Serviços">PINTURA INDUSTRIAL DE TUBULAÇÕES E ESTRUTURAS METÁLICAS, EXECUÇÃO DE</option>
              <option value="19" class="Serviços" data-ramo="Serviços">STEEL FRAME, MONTAGEM DE</option>
              <option value="20" class="Serviços" data-ramo="Serviços">DRYWALL, MONTAGEM DE</option>
              <option value="21" class="Serviços" data-ramo="Serviços">ESTRUTURA METÁLICA, MONTAGEM DE</option>
              <option value="22" class="Serviços" data-ramo="Serviços">TERRAPLANAGEM, EXECUÇÃO DE</option>
              <option value="23" class="Serviços" data-ramo="Serviços">IMPERMEABILIZAÇÃO, EXECUÇÃO DE</option>
              <option value="24" class="Serviços" data-ramo="Serviços">LIMPEZA, SERVIÇOS DE</option>
              <option value="25" class="Serviços" data-ramo="Serviços">TRANSPORTE, SERVIÇOS DE</option>
              <option value="26" class="Serviços" data-ramo="Serviços">MONITORAMENTO, SEGURANÇA PATRIMONIAL, SERVIÇOS DE</option>
              <option value="27" class="Serviços" data-ramo="Serviços">TREINAMENTO, CURSOS, SERVIÇOS DE</option>
              <option value="28" class="Serviços" data-ramo="Serviços">HOSPEDAGEM, SERVIÇOS DE</option>
              <option value="29" class="Serviços" data-ramo="Serviços">REFEIÇÃO, SERVIÇOS DE</option>
              <option value="30" class="Serviços" data-ramo="Serviços">COMUNICAÇÃO, PROPAGANDA, MARKETING, SERVIÇOS DE</option>
              <option value="31" class="Serviços" data-ramo="Serviços">CALIBRAÇÃO DE EQUIPAMENTOS, SERVIÇOS DE</option>
              <option value="32" class="Serviços" data-ramo="Serviços">JARDINAGEM, PAISAGISMO, ETC, SERVIÇOS DE</option>
              <option value="33" class="Serviços" data-ramo="Serviços">CERTIFICAÇÃO, INSPEÇÃO, QUALIDADE, CALIBRAGEM, ETC, SERVIÇOS DE</option>
              <option value="34" class="Serviços" data-ramo="Serviços">EXAMES, SERVIÇOS MÉDICOS E HOSPITALARES, SERVIÇOS DE</option>
              <option value="35" class="Serviços" data-ramo="Serviços">PROJETOS, CONSULTORIAS, LAUDOS, SERVIÇOS DE</option>
              <option value="36" class="Serviços" data-ramo="Serviços">ADVOCACIA, CONTABILIDADE, ASSESSORIA, SERVIÇOS DE</option>
              <option value="37" class="Serviços" data-ramo="Serviços">TI, PROGRAMAÇÃO, IMPLANTAÇÃO, SERVIÇOS DE</option>
            </select>
          </div>
          <div class="login">
            <div class="loginEsq">
              <input type="text" placeholder="CNPJ">
              <input id="senha" type="password" placeholder="Senha" name="senha">
              <div class="verSenha">
                <i onclick="verSenha(event, 'senha')" class="bi bi-eye-slash-fill"></i>
              </div>
            </div>
            <div class="loginDir">
              <input type="text" placeholder="Nome" name="nome">
              <input id="senhaRep" type="password" placeholder="Repetir Senha" name="senhaRep">
              <div class="verSenha">
              <i onclick="verSenha(event, 'senhaRep')" class="bi bi-eye-slash-fill"></i>
              </div>
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