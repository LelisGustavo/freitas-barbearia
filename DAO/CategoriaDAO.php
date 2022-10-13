<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';
class CategoriaDAO extends Conexao
{

    public function CadastrarCategoria($nome_categoria)
    {

        if (trim($nome_categoria) == '') {

            return 0;
        }

        // 1º Passo: Criar uma variável que receberá o OBJ de conexão
        $conexao = parent::retornarConexao();

        // 2º Passo: Criar uma variável que receberá o texto do comando SQL que deverá ser executado no BD
        $comando_sql = 'INSERT INTO tb_categoria
                        (nome_categoria, id_usuario)
                        VALUES
                        (?, ?)';

        // 3º Passo: Criar um OBJ que será configurado e levado no BD para ser executado
        $sql = new PDOStatement();

        // 4ª Passo: Colocar dentro do OBJ $sql a conexão preparada para executar o $comando_sql
        $sql = $conexao->prepare($comando_sql);

        // 5º Passo: Verificar se no $comando_sql tem ? para ser configurado. Se tiver, configurar os bindValues
        $sql->bindValue(1, $nome_categoria);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        try {
            // 6º Passo: Executar no BD
            $sql->execute();

            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();

            return -1;
        }
    }
}
