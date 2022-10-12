SELECT nome_usuario, data_cadastro
	FROM tb_usuario
    WHERE nome_usuario LIKE '%n%';
    
SELECT nome_usuario, data_cadastro
	FROM tb_usuario
    WHERE data_cadastro BETWEEN '2022-01-01' AND '2022-12-31';
    
SELECT banco_conta, agencia_conta, saldo_conta
	FROM tb_conta
    WHERE id_usuario = 1;
    
SELECT tb_movimento.id_usuario,
	   tipo_movimento,
	   DATE_FORMAT(data_movimento, "%d/%m/%Y") AS data_movimento,
       valor_movimento,
       nome_categoria,
       nome_empresa,
       nome_usuario,
       banco_conta,
       obs_movimento
	FROM tb_movimento
    INNER JOIN tb_categoria
		ON tb_categoria.id_categoria = tb_movimento.id_categoria
    INNER JOIN tb_empresa
		ON tb_empresa.id_empresa = tb_movimento.id_empresa
    INNER JOIN tb_usuario
		ON tb_usuario.id_usuario = tb_movimento.id_usuario
    INNER JOIN tb_conta
		ON tb_conta.id_conta = tb_movimento.id_conta
    WHERE tb_movimento.obs_movimento IS NOT NULL;
        
SELECT SUM(valor_movimento) AS total
	FROM tb_movimento
    WHERE tipo_movimento = 2
     AND id_usuario = 3;

--------------------------------------------------

