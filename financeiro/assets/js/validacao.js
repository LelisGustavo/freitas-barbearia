// Função para validar a página de Login
function ValidarLogin() {
  if ($("#email").val().trim() == "") {
    alert("Preencher o campo EMAIL");
    $("#email").focus();
    $("#div_login_1").addClass("has-error");
    return false;
  } else {
    $("#div_login_1").removeClass("has-error").addClass("has-success");
  }

  if ($("#senha").val().trim() == "") {
    alert("Preencher o campo SENHA");
    $("#senha").focus();
    $("#div_login_2").addClass("has-error");
    return false;
  } else {
    $("#div_login_2").removeClass("has-error").addClass("has-success");
  }
}

// Função para validar a página de Cadastro
function ValidarCadastro() {
  if ($("#nome").val().trim() == "") {
    alert("Preencher o campo NOME");
    $("#nome").focus();
    $("#div_cadastro_1").addClass("has-error");
    return false;
  } else {
    $("#div_cadastro_1").removeClass("has-error").addClass("has-success");
  }

  if ($("#email").val().trim() == "") {
    alert("Preencher o campo EMAIL");
    $("#email").focus();
    $("#div_cadastro_2").addClass("has-error");
    return false;
  } else {
    $("#div_cadastro_2").removeClass("has-error").addClass("has-success");
  }

  if ($("#senha").val().trim() == "") {
    alert("Preencher o campo SENHA");
    $("#senha").focus();
    $("#div_cadastro_3").addClass("has-error");
    return false;
  } else {
    $("#div_cadastro_3").removeClass("has-error").addClass("has-success");
  }

  if ($("#senha").val().trim().length < 6) {
    alert("A SENHA deverá conter no mínimo 6 caracteres");
    $("#senha").focus();
    $("#div_cadastro_3").addClass("has-error");
    return false;
  } else {
    $("#div_cadastro_3").removeClass("has-error").addClass("has-success");
  }

  if ($("#senha").val().trim() != $("#repetir_senha").val().trim()) {
    alert("Os campos SENHA e REPETIR SENHA deverão ser iguais");
    $("#repetir_senha").focus();
    $("#div_cadastro_4").addClass("has-error");
    return false;
  } else {
    $("#div_cadastro_4").removeClass("has-error").addClass("has-success");
  }
}

// Função para validar a página MeusDados
function ValidarMeusDados() {
  var nome = document.getElementById("nome").value;
  var email = $("#email").val();

  if (nome.trim() == "") {
    alert("Preencher o campo NOME");
    $("#nome").focus();
    $("#div_dados_1").addClass("has-error");
    return false;
  } else {
    $("#div_dados_1").removeClass("has-error").addClass("has-success");
  }

  if (email.trim() == "") {
    alert("Preencher o campo EMAIL");
    $("#email").focus();
    $("#div_dados_2").addClass("has-error");
    return false;
  } else {
    $("#div_dados_2").removeClass("has-error").addClass("has-success");
  }
}

// Função para validar as páginas de Categoria
function ValidarCategoria() {
  if ($("#nome_categoria").val().trim() == "") {
    alert("Preencher o campo NOME DA CATEGORIA");
    $("#nome_categoria").focus();
    $("#div_categoria_1").addClass("has-error");
    return false;
  } else {
    $("#div_categoria_1").removeClass("has-error").addClass("has-success");
  }
}

// Função para validar as páginas de Agenda
function ValidarHorario() {
  if ($("#nome_servico").val().trim() == "") {
    alert("Preencher o campo SERVIÇO A SER REALIZADO");
    $("#nome_servico").focus();
    $("#div_horario_1").addClass("has-error");
    return false;
  } else {
    $("#div_horario_1").removeClass("has-error").addClass("has-success");
  }

  if ($("#horario").val().trim() == "") {
    alert("Preencher o campo HORÁRIO");
    $("#horario").focus();
    $("#div_horario_2").addClass("has-error");
    return false;
  } else {
    $("#div_horario_2").removeClass("has-error").addClass("has-success");
  }

  if ($("#data").val().trim() == "") {
    alert("Preencher o campo DATA");
    $("#data").focus();
    $("#div_horario_3").addClass("has-error");
    return false;
  } else {
    $("#div_horario_3").removeClass("has-error").addClass("has-success");
  }
}

// Função para validar as páginas de Empresa
function ValidarEmpresa() {
  if ($("#nome_empresa").val().trim() == "") {
    alert("Preencher o campo NOME DA EMPRESA");
    $("#nome_empresa").focus();
    $("#div_empresa_1").addClass("has-error");
    return false;
  } else {
    $("#div_empresa_1").removeClass("has-error").addClass("has-success");
  }
}

// Função para validar as páginas de Conta
function ValidarConta() {
  if ($("#nome_banco").val().trim() == "") {
    alert("Preencher o campo NOME DO BANCO");
    $("#nome_banco").focus();
    $("#div_conta_1").addClass("has-error");
    return false;
  } else {
    $("#div_conta_1").removeClass("has-error").addClass("has-success");
  }

  if ($("#agencia").val().trim() == "") {
    alert("Preencher o campo AGÊNCIA");
    $("#agencia").focus();
    $("#div_conta_2").addClass("has-error");
    return false;
  } else {
    $("#div_conta_2").removeClass("has-error").addClass("has-success");
  }

  if ($("#numero_conta").val().trim() == "") {
    alert("Preencher o campo NÚMERO DA CONTA");
    $("#numero_conta").focus();
    $("#div_conta_3").addClass("has-error");
    return false;
  } else {
    $("#div_conta_3").removeClass("has-error").addClass("has-success");
  }

  if ($("#saldo").val().trim() == "") {
    alert("Preencher o campo SALDO");
    $("#div_conta_4").addClass("has-error");
    $("#saldo").focus();
    return false;
  } else {
    $("#div_conta_4").removeClass("has-error").addClass("has-success");
  }
}

// Função para validar a páginas de Estoques
function ValidarEstoque() {
  if ($("#tipo_movimento").val() == "") {
    alert("Preencher o campo TIPO DO MOVIMENTO");
    $("#tipo_movimento").focus();
    $("#div_estoque_1").addClass("has-error");
    return false;
  } else {
    $("#div_estoque_1").removeClass("has-error").addClass("has-success");
  }

  if ($("#data").val().trim() == "") {
    alert("Preencher o campo DATA");
    $("#data").focus();
    $("#div_estoque_2").addClass("has-error");
    return false;
  } else {
    $("#div_estoque_2").removeClass("has-error").addClass("has-success");
  }

  if ($("#nome_produto").val().trim() == "") {
    alert("Preencher o campo PRODUTO");
    $("#nome_produto").focus();
    $("#div_estoque_3").addClass("has-error");
    return false;
  } else {
    $("#div_estoque_3").removeClass("has-error").addClass("has-success");
  }

  if ($("#quantidade").val().trim() == "") {
    alert("Preencher o campo QUANTIDADE");
    $("#quantidade").focus();
    $("#div_estoque_4").addClass("has-error");
    return false;
  } else {
    $("#div_estoque_4").removeClass("has-error").addClass("has-success");
  }
}

function ValidarConsultaPeriodoEstoque() {
  if ($("#nome_produto").val() == "") {
    alert("Preencher o campo PRODUTO");
    $("#nome_produto").focus();
    $("#div_estoque_1").addClass("has-error");
    return false;
  } else {
    $("#div_estoque_1").removeClass("has-error").addClass("has-success");
  }

  if ($("#data_inicial").val().trim() == "") {
    alert("Preenhcer o campo DATA INICIAL");
    $("#data_inicial").focus();
    $("#div_estoque_2").addClass("has-error");
    return false;
  } else {
    $("#div_estoque_2").removeClass("has-error").addClass("has-success");
  }

  if ($("#data_final").val().trim() == "") {
    alert("Preencher o campo DATA FINAL");
    $("#data_final").focus();
    $("#div_estoque_3").addClass("has-error");
    return false;
  } else {
    $("#div_estoque_3").removeClass("has-error").addClass("has-success");
  }
}

// Função para validar a páginas de Movimento
function ValidarMovimento() {
  if ($("#tipo_movimento").val() == "") {
    alert("Preencher o campo TIPO DE MOVIMENTO");
    $("#tipo_movimento").focus();
    $("#div_movimento_1").addClass("has-error");
    return false;
  } else {
    $("#div_movimento_1").removeClass("has-error").addClass("has-success");
  }

  if ($("#data").val().trim() == "") {
    alert("Preencher o campo DATA");
    $("#data").focus();
    $("#div_movimento_2").addClass("has-error");
    return false;
  } else {
    $("#div_movimento_2").removeClass("has-error").addClass("has-success");
  }

  if ($("#valor").val().trim() == "") {
    alert("Preencher o campo VALOR");
    $("#valor").focus();
    $("#div_movimento_3").addClass("has-error");
    return false;
  } else {
    $("#div_movimento_3").removeClass("has-error").addClass("has-success");
  }

  if ($("#nome_categoria").val().trim() == "") {
    alert("Preencher o campo CATEGORIA");
    $("#nome_categoria").focus();
    $("#div_movimento_4").addClass("has-error");
    return false;
  } else {
    $("#div_movimento_4").removeClass("has-error").addClass("has-success");
  }

  if ($("#nome_empresa").val().trim() == "") {
    alert("Preencher o campo EMPRESA");
    $("#nome_empresa").focus();
    $("#div_movimento_5").addClass("has-error");
    return false;
  } else {
    $("#div_movimento_5").removeClass("has-error").addClass("has-success");
  }

  if ($("#conta_banco").val().trim() == "") {
    alert("Preencher o campo CONTA");
    $("#conta_banco").focus();
    $("#div_movimento_6").addClass("has-error");
    return false;
  } else {
    $("#div_movimento_6").removeClass("has-error").addClass("has-success");
  }
}

function ValidarConsultaPeriodo() {
  if ($("#data_inicial").val().trim() == "") {
    alert("Preencher o campo DATA INICIAL");
    $("#data_inicial").focus();
    $("#div_movimento_1").addClass("has-error");
    return false;
  } else {
    $("#div_movimento_1").removeClass("has-error").addClass("has-success");
  }

  if ($("#data_final").val().trim() == "") {
    alert("Preencher o campo DATA FINAL");
    $("#data_final").focus();
    $("#div_movimento_2").addClass("has-error");
    return false;
  } else {
    $("#div_movimento_2").removeClass("has-error").addClass("has-success");
  }
}
