$(document).ready(function() {
  // ativando a barra de pesquisa dos campos select
  $('#contribuinte').select2();
  $('#ramo').select2();

  // previnindo o envio do formulário
  $(function() {
  $('#dadosForm').on('submit', function(event) {
    event.preventDefault();

    let valido = true;

    // removendo erros após a digitação correta
    $("input").on("input", function () {
      $(this).css("border-color", "#dbe1e8")
        .next(".error").text("");
    });

    $("#senha").on("input", function () {
      $("#senha").next("#verSenha").next(".error").text("");
    });

    $("#senhaRep").on("input", function () {
      $("#senhaRep").next("#verSenhaRep").next(".error").text("");
    });

    $("#contribuinte").on("change", function () {
      $(this).next(".select2").children(".selection").children(".select2-selection").css('border-color', '#dbe1e8');
      $(this).next(".select2").next(".error").text("");
    });

    $("#ramo").on("change", function () {
      $(this).next(".select2").children(".selection").children(".select2-selection").css('border-color', '#dbe1e8');
      $(this).next(".select2").next(".error").text("");
    });

    $("input[type=checkbox][name=opcao]").on("change", function() {
      $(".tipoFornecedor").next(".error").text("");
    });







    // validação do campo cnpj
    let cnpj = $("#cnpj").val().trim();
    if (cnpj === "") {
      $("#cnpj").next(".error").text("O campo CNPJ é obrigatório.");
      $("#cnpj").css('border-color', 'red');
      valido = false;
    } else if (cnpj.replace(/\D/g, "").length < 14) {
      $("#cnpj").next(".error").text("Insira um CNPJ válido.");
      $("#cnpj").css('border-color', 'red');
      valido = false;
    };

    // validação do campo contribuinte icms
    let contribuinte = $("#contribuinte").val();
    if (!contribuinte) {
      $("#contribuinte").next(".select2").next(".error").text("O campo ICMS é obrigatório.");
      $("#contribuinte").next(".select2").children(".selection").children(".select2-selection").css('border-color', 'red');
      valido = false;
    };

    // validação do campo fornecedor
    let fornecedor = $("#fornecedor").val().trim();
    if (fornecedor === '') {
      $(".tipoFornecedor").next(".error").text("O campo fornecedor é obrigatório.");
      valido = false;
    };

    // validação do campo ramo de atuação
    let ramo = $("#ramo").val();
    if (!ramo) {
      $("#ramo").next(".select2").next(".error").text("O campo ramo de atuação é obrigatório.");
      $("#ramo").next(".select2").children(".selection").children(".select2-selection").css('border-color', 'red');
      valido = false;
    };

    // validação do campo cnpj do cadastro
    let cnpjLogin = $("#cnpjLogin").val().trim();
    if (cnpjLogin === "") {
      $("#cnpjLogin").next(".error").text("O campo CNPJ é obrigatório.");
      $("#cnpjLogin").css('border-color', 'red');
      valido = false;
    } else if (cnpjLogin.replace(/\D/g, "").length < 14) {
      $("#cnpjLogin").next(".error").text("Insira um CNPJ válido.");
      $("#cnpjLogin").css('border-color', 'red');
      valido = false;
    };
    
    // validação da senha
    let senha = $("#senha").val().trim();
    if (senha === "") {
      $("#verSenha").next(".error").text("O campo senha é obrigatório.");
      $("#senha").css('border-color', 'red');
      valido = false;
    };

    // validação do nome
    let nome = $("#nome").val().trim();
    if (nome === "") {
      $("#nome").next(".error").text("O campo nome é obrigatório.");
      $("#nome").css('border-color', 'red');
      valido = false;
    };

    // validação da confimação da senha
    let senhaRep = $("#senhaRep").val().trim();
    if (senhaRep === "") {
      $("#verSenhaRep").next(".error").text("O campo senha é obrigatório.");
      $("#senhaRep").css('border-color', 'red');
      valido = false;
    } else if (senha !== senhaRep) {
      $("#verSenhaRep").next(".error").text("As senhas precisam ser iguais.");
      $("#senhaRep").css('border-color', 'red')
      valido = false;
    };

    // se tudo for válido, podemos enviar
    if (valido) {
      this.submit();
    }
  });
})});

// alternando entre os checkbox selecionados (fornecedor)
function alteraCheckbox(e) {
  const servicos = document.getElementById('servicos');
  const materiais = document.getElementById('materiais');
  const locacao = document.getElementById('locacao');
  const fornecedor = document.getElementById('fornecedor');

  if(e.target.value == "servicos") {
    materiais.checked = false;
    locacao.checked = false;
  } else if(e.target.value == "materiais") {
    servicos.checked = false;
    locacao.checked = false;
  } else {
    materiais.checked = false;
    servicos.checked = false;
  };
  fornecedor.value = e.target.value;
};

// alternando entre senha visível e não visível
function verSenha(e, senhaVisivel) {
  const eyeIcon = e.target;
  const senha = document.getElementById(senhaVisivel);

  if(eyeIcon.classList.contains("bi-eye-slash-fill")) {
    eyeIcon.classList.remove("bi-eye-slash-fill");
    eyeIcon.classList.add("bi-eye-fill");
    senha.type = "text";
  } else {
    eyeIcon.classList.remove("bi-eye-fill");
    eyeIcon.classList.add("bi-eye-slash-fill");
    senha.type = "password";
  };
};

// buscando os campos readonly do formulário a partir do cnpj com api
window.onload = function() {
  const cnpj = document.getElementById('cnpj');
  const cnpjLogin = document.getElementById('cnpjLogin');
  
  
  cnpj.addEventListener('change', () => {
    $("#cnpjLogin").val(cnpj.value).trigger("input");
    const cnpjFormatado = cnpj.value.replace(/\D/g, "");
    fetch('consulta.php?cnpj=' + cnpjFormatado)
    .then(res => res.json())
    .then(data => {
      console.log(cnpjFormatado)
      document.getElementById("nomeFantasia").value = data.fantasia;
      document.getElementById("telefone").value = data.telefone;
      document.getElementById("endereco").value = data.logradouro;
      document.getElementById("complemento").value = data.complemento;
      document.getElementById("pais").value = data.pais || "Brasil";
      document.getElementById("cep").value = data.cep;
      document.getElementById("razaoSocial").value = data.nome;
      document.getElementById("situacao").value = data.situacao;
      document.getElementById("email").value = data.email;
      document.getElementById("numero").value = data.numero;
      document.getElementById("bairro").value = data.bairro;
      document.getElementById("estado").value = data.uf;
      document.getElementById("municipio").value = data.municipio;
    })
    .catch(err => console.error("Erro na consulta:", err));
  });
};
