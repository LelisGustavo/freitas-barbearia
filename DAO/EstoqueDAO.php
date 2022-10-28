<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';
class EstoqueDAO extends Conexao
{

    public function FiltrarEstoque($id_estoque)
    {

        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT id_movimento_estoque,
                               tb_movimento_estoque.id_estoque
                               produto_estoque,
                               tipo_movimento_estoque,
                               DATE_FORMAT(data_movimento_estoque, "%d/%m/%Y") AS data_movimento_estoque,
                               valor_movimento_estoque,
                               obs_movimento_estoque
                        FROM tb_movimento_estoque
                        INNER JOIN tb_estoque
                        ON tb_estoque.id_estoque = tb_movimento_estoque.id_estoque
                        WHERE tb_movimento_estoque.id_usuario = ?
                        AND tb_movimento_estoque.id_estoque = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());
        $sql->bindValue(2, $id_estoque);

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function ConsultarEstoque()
    {

        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT produto_estoque,
                               quantidade_estoque,
                               id_estoque
                        FROM tb_estoque
                        WHERE id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function CadastrarEstoque($nome_produto)
    {

        if (trim($nome_produto) == '') {

            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'INSERT INTO tb_estoque
                        (produto_estoque, id_usuario)
                        VALUES
                        (?, ?)';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome_produto);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        try {

            $sql->execute();

            return 1;
        } catch (Exception $ex) {

            echo $ex->getMessage();

            return -1;
        }
    }

    public function RealizarMovimentoEstoque($tipo_movimento, $quantidade, $produto_estoque)
    {

        if ($tipo_movimento == '' || trim($quantidade) == '') {

            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'INSERT INTO tb_movimento_estoque
                        (tipo_movimento_estoque, valor_movimento_estoque, id_estoque, id_usuario)
                        VALUES
                        (?, ?, ?, ?)';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $tipo_movimento);
        $sql->bindValue(2, $quantidade);
        $sql->bindValue(3, $produto_estoque);
        $sql->bindValue(4, UtilDAO::CodigoLogado());


        $conexao->beginTransaction();

        try {

            $sql->execute();

            if ($tipo_movimento == 1) {

                $comando_sql = 'UPDATE tb_estoque
                                SET quantidade_estoque = quantidade_estoque + ?
                                WHERE id_estoque = ?';
            } elseif ($tipo_movimento == 2) {

                $comando_sql = 'UPDATE tb_estoque
                                SET quantidade_estoque = quantidade_estoque - ?
                                WHERE id_estoque = ?';
            }

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, $quantidade);
            $sql->bindValue(2, $produto_estoque);

            $sql->execute();

            $conexao->commit();

            return 1;
        } catch (Exception $ex) {

            echo $ex->getMessage() .

                $conexao->rollBack();

            return -1;
        }
    }
}
