$(document).ready(function() {
  // ativando a barra de pesquisa dos campos select
  $('#contribuinte').select2();
  $('#ramo').select2();

  // previnindo o envio do formulário
  $('#dadosForm').on('submit', function(event) {
    event.preventDefault();
  });
});

// alternando entre os checkbox selecionados (fornecedor)
function alteraCheckbox(e) {
  const servicos = document.getElementById('servicos');
  const materiais = document.getElementById('materiais');
  const locacao = document.getElementById('locacao');
  const fornecedor = document.getElementById('fornecedor');

  if(e.target.name == "servicos") {
    materiais.checked = false;
    locacao.checked = false;
  } else if(e.target.name == "materiais") {
    servicos.checked = false;
    locacao.checked = false;
  } else {
    materiais.checked = false;
    servicos.checked = false;
  };
  fornecedor.value = e.target.name;
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
  
  cnpj.addEventListener('change', () => {
    fetch('consulta.php?cnpj=' + cnpj.value)
    .then(res => res.json())
    .then(data => {
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


