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
