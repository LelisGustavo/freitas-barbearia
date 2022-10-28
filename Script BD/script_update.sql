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