// Função para validar a página de Login
function ValidarLogin() {
  if ($("#email").val().trim() == "") {
    alert("Preencher o campo EMAIL");
    $("#email").focus();
    return false;
  }

  if ($("#senha").val().trim() == "") {
    alert("Preencher o campo SENHA");
    $("#senha").focus();
    return false;
  }
}

// Função para validar a página de Cadastro
function ValidarCadastro() {
  if ($("#nome").val().trim() == "") {
    alert("Preencher o campo NOME");
    $("#nome").focus();
    return false;
  }

  if ($("#email").val().trim() == "") {
    alert("Preencher o campo EMAIL");
    $("#email").focus();
    return false;
  }

  if ($("#senha").val().trim() == "") {
    alert("Preencher o campo SENHA");
    $("#senha").focus();
    return false;
  }

  if ($("#senha").val().trim().length < 6) {
    alert("A SENHA deverá conter no mínimo 6 caracteres");
    $("#senha").focus();
    return false;
  }

  if ($("#senha").val().trim() != $("#repetir_senha").val().trim()) {
    alert("Os campos SENHA e REPETIR SENHA deverão ser iguais");
    $("#repetir_senha").focus();
    return false;
  }
}

// Função para validar a página MeusDados
function ValidarMeusDados() {
  var nome = document.getElementById("nome").value;
  var email = $("#email").val();

  if (nome.trim() == "") {
    alert("Preencher o campo NOME");
    $("#nome").focus();
    return false;
  }

  if (email.trim() == "") {
    alert("Preencher o campo EMAIL");
    $("#email").focus();
    return false;
  }
}

// Função para validar as páginas de Categoria
function ValidarCategoria() {
  if ($("#nome_categoria").val().trim() == "") {
    alert("Preencher o campo NOME DA CATEGORIA");
    $("#nome_categoria").focus();
    return false;
  }
}

// Função para validar as páginas de Agenda
function ValidarHorario() {
  if ($("#nome_servico").val().trim() == "") {
    alert("Preencher o campo SERVIÇO A SER REALIZADO");
    $("#nome_servico").focus();
    return false;
  }

  if ($("#horario").val().trim() == "") {
    alert("Preencher o campo HORÁRIO");
    $("#horario").focus();
    return false;
  }
}

// Função para validar as páginas de Empresa
function ValidarEmpresa() {
  if ($("#nome_empresa").val().trim() == "") {
    alert("Preencher o campo NOME DA EMPRESA");
    $("#nome_empresa").focus();
    return false;
  }
}

// Função para validar as páginas de Conta
function ValidarConta() {
  if ($("#nome_banco").val().trim() == "") {
    alert("Preencher o campo NOME DO BANCO");
    $("#nome_banco").focus();
    return false;
  }

  if ($("#agencia").val().trim() == "") {
    alert("Preencher o campo AGÊNCIA");
    $("#agencia").focus();
    return false;
  }

  if ($("#numero_conta").val().trim() == "") {
    alert("Preencher o campo NÚMERO DA CONTA");
    $("#numero_conta").focus();
    return false;
  }

  if ($("#saldo").val().trim() == "") {
    alert("Preencher o campo SALDO");
    $("#saldo").focus();
    return false;
  }
}

// Função para validar a páginas de Estoques
function ValidarEstoque() {
  if ($("#tipo_movimento").val() == "") {
    alert("Preencher o campo TIPO DO MOVIMENTO");
    $("#tipo_movimento").focus();
    return false;
  }

  if ($("#data").val().trim() == "") {
    alert("Preencher o campo DATA");
    $("#data").focus();
    return false;
  }

  if ($("#nome_produto").val().trim() == "") {
    alert("Preencher o campo PRODUTO");
    $("#nome_produto").focus();
    return false;
  }

  if ($("#quantidade").val().trim() == "") {
    alert("Preencher o campo QUANTIDADE");
    $("#quantidade").focus();
    return false;
  }
}

function ValidarConsultaPeriodoEstoque() {
  if ($("#nome_produto").val() == "") {
    alert("Preencher o campo PRODUTO");
    $("#nome_produto").focus();
    return false;
  }

  if ($("#data_inicial").val().trim() == "") {
    alert("Preenhcer o campo DATA INICIAL");
    $("#data_inicial").focus();
    return false;
  }

  if ($("#data_final").val().trim() == "") {
    alert("Preencher o campo DATA FINAL");
    $("#data_final").focus();
    return false;
  }
}

// Função para validar a páginas de Movimento
function ValidarMovimento() {
  if ($("#tipo_movimento").val() == "") {
    alert("Preencher o campo TIPO DE MOVIMENTO");
    $("#tipo_movimento").focus();
    return false;
  }

  if ($("#data").val().trim() == "") {
    alert("Preencher o campo DATA");
    $("#data").focus();
    return false;
  }

  if ($("#valor").val().trim() == "") {
    alert("Preencher o campo VALOR");
    $("#valor").focus();
    return false;
  }

  if ($("#nome_categoria").val().trim() == "") {
    alert("Preencher o campo CATEGORIA");
    $("#nome_categoria").focus();
    return false;
  }

  if ($("#nome_empresa").val().trim() == "") {
    alert("Preencher o campo EMPRESA");
    $("#nome_empresa").focus();
    return false;
  }

  if ($("#conta_banco").val().trim() == "") {
    alert("Preencher o campo CONTA");
    $("#conta_banco").focus();
    return false;
  }
}

function ValidarConsultaPeriodo() {
  if ($("#data_inicial").val().trim() == "") {
    alert("Preencher o campo DATA INICIAL");
    $("#data_inicial").focus();
    return false;
  }

  if ($("#data_final").val().trim() == "") {
    alert("Preencher o campo DATA FINAL");
    $("#data_final").focus();
    return false;
  }
}
