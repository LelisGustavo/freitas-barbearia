-- UPDATE (Atualizar)

UPDATE tb_usuario
	SET email_usuario = 'Cedrico@Zabuza.com'
    WHERE id_usuario = 1;
    
UPDATE tb_usuario
	SET email_usuario = 'Monize@Shark.com'
    WHERE id_usuario = 2;

UPDATE tb_estoque
	SET quantidade_estoque = quantidade_estoque + 100
    WHERE id_estoque = 9;
    
UPDATE tb_estoque
	SET quantidade_estoque = quantidade_estoque - 550
    WHERE id_estoque = 38;
    
UPDATE tb_agenda
	SET nome_servico = 'Barba da Khaleesi', horario_agenda = '00:00', data_agenda = '2022-10-20', obs_agenda = 'Teste da Khaleesi'
    WHERE id_agenda = 8
    AND id_usuario = 1;