SELECT nome_usuario,
	   email_usuario
	FROM tb_usuario;
    
SELECT nome_categoria, 
	   nome_usuario
	FROM tb_categoria
    INNER JOIN tb_usuario
		ON tb_categoria.id_usuario = tb_usuario.id_usuario;
    
SELECT nome_usuario, 
	   nome_empresa
	FROM tb_empresa
    INNER JOIN tb_usuario
		ON tb_empresa.id_usuario = tb_usuario.id_usuario;
    
SELECT banco_conta,
	   agencia_conta,
       numero_conta,
       saldo_conta,
       nome_usuario
	FROM tb_conta
    INNER JOIN tb_usuario
		ON tb_conta.id_usuario = tb_usuario.id_usuario;
    
SELECT tipo_movimento,
	   data_movimento,
       valor_movimento,
       nome_categoria,
       nome_empresa,
       nome_usuario,
       banco_conta
	FROM tb_movimento
    INNER JOIN tb_categoria
		ON tb_categoria.id_categoria = tb_movimento.id_categoria
    INNER JOIN tb_empresa
		ON tb_empresa.id_empresa = tb_movimento.id_empresa
    INNER JOIN tb_usuario
		ON tb_usuario.id_usuario = tb_movimento.id_usuario
    INNER JOIN tb_conta
		ON tb_conta.id_conta = tb_movimento.id_conta;
    
SELECT nome_servico,
       horario_agenda,
       data_agenda,
       nome_usuario
	FROM tb_agenda
    INNER JOIN tb_usuario
		ON tb_usuario.id_usuario = tb_agenda.id_usuario;
    
SELECT tipo_movimento,
	   produto_estoque,
       data_estoque,
       quantidade_estoque,
       nome_usuario
	FROM tb_estoque
    INNER JOIN tb_usuario
		ON tb_usuario.id_usuario = tb_estoque.id_usuario;
        
--------------------------------------------------

SELECT nome_categoria,
	   nome_usuario
	FROM tb_categoria
    INNER JOIN tb_usuario
		ON tb_usuario.id_usuario = tb_categoria.id_usuario;
        
SELECT nome_empresa,
	   telefone_empresa,
       endereco_empresa,
       nome_usuario
	FROM tb_empresa
    INNER JOIN tb_usuario
		ON tb_usuario.id_usuario = tb_empresa.id_empresa;
        
SELECT banco_conta,
	   saldo_conta,
       numero_conta,
       nome_usuario,
       email_usuario
	FROM tb_conta
    INNER JOIN tb_usuario
		ON tb_usuario.id_usuario = tb_conta.id_usuario;
        
SELECT data_movimento,
	   tipo_movimento,
       valor_movimento,
       nome_usuario
	FROM tb_movimento
    INNER JOIN tb_usuario
		ON tb_usuario.id_usuario = tb_movimento.id_usuario;
        
SELECT data_movimento,
	   tipo_movimento,
       valor_movimento,
       nome_usuario,
       nome_categoria
	FROM tb_movimento
    INNER JOIN tb_usuario
		ON tb_usuario.id_usuario = tb_movimento.id_usuario
	INNER JOIN tb_categoria
		ON tb_categoria.id_categoria = tb_movimento.id_categoria;
        
SELECT data_movimento,
	   valor_movimento,
       nome_usuario,
       email_usuario,
       nome_categoria,
       nome_empresa
	FROM tb_movimento
    INNER JOIN tb_usuario
		ON tb_usuario.id_usuario = tb_movimento.id_usuario
	INNER JOIN tb_categoria
		ON tb_categoria.id_categoria = tb_movimento.id_categoria
	INNER JOIN tb_empresa
		ON tb_empresa.id_empresa = tb_movimento.id_empresa;
        
SELECT data_movimento,
	   valor_movimento,
       banco_conta,
       numero_conta,
       nome_empresa,
       nome_categoria,
       nome_usuario
	FROM tb_movimento
    INNER JOIN tb_conta
		ON tb_conta.id_conta = tb_movimento.id_conta
	INNER JOIN tb_empresa
		ON tb_empresa.id_empresa = tb_movimento.id_empresa
	INNER JOIN tb_categoria
		ON tb_categoria.id_categoria = tb_movimento.id_categoria
	INNER JOIN tb_usuario
		ON tb_usuario.id_usuario = tb_movimento.id_usuario;