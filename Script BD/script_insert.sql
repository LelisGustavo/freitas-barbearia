-- INSERT (Inserir)

-- Usuário

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Cedrico Zabuza', 'Cedrico@Zabuza', 'cedrico123', '2022-10-11'); -- ID == 1

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Gustavo Lélis', 'LelisGustavo@hotmail.com', 'lelis3003', '2022-05-03'); -- ID == 3

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Naruto Uzumaki', 'Naruto@hotmail.com', 'naruto123', '2022-03-30'); -- ID == 4

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Sasuke Uchiha', 'Sasuke@gmail.com', 'sasuke123', '2022-06-09'); -- ID == 5

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Sakura Haruno', 'Sakura@gmail.com', 'Sakura123', '2022-09-11'); -- ID == 6

--------------------------------------------------

-- Categoria

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Alimentação', 1);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Cursos', 3);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Lazer', 4);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Viagem', 5);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Compras', 6);

--------------------------------------------------

-- Agenda

INSERT INTO tb_agenda
(nome_servico, horario_agenda, data_agenda, id_usuario)
VALUES
('Corte de cabelo', '18:00', '2022-10-11', 1);

INSERT INTO tb_agenda
(nome_servico, horario_agenda, data_agenda, id_usuario)
VALUES
('Pintura de cabelo', '06:00', '2022-10-11', 3);

INSERT INTO tb_agenda
(nome_servico, horario_agenda, data_agenda, id_usuario)
VALUES
('Sobrancelha', '15:00', '2022-03-30', 4);

INSERT INTO tb_agenda
(nome_servico, horario_agenda, data_agenda, id_usuario)
VALUES
('Pézinho', '03:00', '2022-03-30', 5);

INSERT INTO tb_agenda
(nome_servico, horario_agenda, data_agenda, id_usuario)
VALUES
('Barba', '21:00', '2022-09-11', 6);

--------------------------------------------------

-- Empresa

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('McDonalds', '1934766657', 'Rua dos Palahaços', 1);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('WMBarros', '4334766651', 'Av. Maringa', 3);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('Netflix', null, null, 4);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('CVC', null, 'Rua dos Aviões', 5);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('Mercado Livre', '17994657781', null, 6);

--------------------------------------------------

-- Conta

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('NuBank', '1122', '112233', 4500.20, 1);

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('Bradesco', '3344', '334455', 987.65 , 3);

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('Caixa', '5566', '556677', 18.97, 4);

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('Itaú', '7788', '778899', 2587.33, 5);

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('Inter', '9900', '990011', 950, 6);

--------------------------------------------------

-- Estoque

INSERT INTO tb_estoque
(tipo_movimento, produto_estoque, obs_estoque, data_estoque, quantidade_estoque, id_usuario)
VALUES
(1, 'Pomada para cabelo', null, '2022-12-11', 25, 1);

INSERT INTO tb_estoque
(tipo_movimento, produto_estoque, obs_estoque, data_estoque, quantidade_estoque, id_usuario)
VALUES
(2, 'Gel para cabelo', 'Doação', '2022-12-11', 25, 3);

INSERT INTO tb_estoque
(tipo_movimento, produto_estoque, obs_estoque, data_estoque, quantidade_estoque, id_usuario)
VALUES
(1, 'Tinta platina', null, '2022-03-30', 7, 4);

INSERT INTO tb_estoque
(tipo_movimento, produto_estoque, obs_estoque, data_estoque, quantidade_estoque, id_usuario)
VALUES
(2, 'Navalha', 'Descarte', '2022-09-11', 10, 5);

INSERT INTO tb_estoque
(tipo_movimento, produto_estoque, obs_estoque, data_estoque, quantidade_estoque, id_usuario)
VALUES
(2, 'Cadeira', 'Compra de  cadeira nova', '2022-08-07', 1, 6);

--------------------------------------------------

-- Movimento

INSERT INTO tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
VALUES
(1, '2022-05-30', 45, null, 1, 1, 1, 1);

INSERT INTO tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
VALUES
(2, '2022-03-30', 666.66, 'Pagamento cartão', 2, 2, 2, 3);

INSERT INTO tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
VALUES
(1, '2022-04-30', 15, null, 3, 3, 3, 4);

INSERT INTO tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
VALUES
(2, '2022-07-30', 900, 'Hotel', 4, 4, 4, 5);

INSERT INTO tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
VALUES
(1, '2022-06-30', 247.96, 'Vestido', 5, 5, 5, 6);