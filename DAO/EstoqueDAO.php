<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';
class EstoqueDAO extends Conexao
{

    public function RealizarMovimentoEstoque($tipo_movimento, $nome_produto, $obs, $data, $quantidade)
    {

        if ($tipo_movimento == '' || trim($nome_produto) == '' || trim($data) == '' || trim($quantidade) == '') {

            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'INSERT INTO tb_estoque
                        (tipo_movimento, produto_estoque, obs_estoque, data_estoque, quantidade_estoque, id_usuario)
                        VALUES
                        (?, ?, ?, ?, ?, ?)'; // 6 Values

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $tipo_movimento);
        $sql->bindValue(2, $nome_produto);
        $sql->bindValue(3, $obs == '' ? null : $obs);
        $sql->bindValue(4, $data);
        $sql->bindValue(5, $quantidade);
        $sql->bindValue(6, UtilDAO::CodigoLogado());

        $conexao->beginTransaction();

        try {
            $sql->execute();

            if ($tipo_movimento == 1) {

                $comando_sql = 'UPDATE tb_estoque
                                SET quantidade_estoque = quantidade_estoque + ?';
            } elseif ($tipo_movimento == 2) {

                $comando_sql = 'UPDATE tb_estoque
                                SET quantidade_estoque = quantidade_estoque - ?';
            }

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, $quantidade);

            $sql->execute();

            $conexao->commit();

            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            $conexao->rollBack();

            return -1;
        }
    }

    public function ConsultarEstoque()
    {

        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT produto_estoque,
                               tipo_movimento,
                               DATE_FORMAT(data_estoque, "%d/%m/%Y") AS data_estoque,
                               quantidade_estoque,
                               obs_estoque,
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

    public function DetalharEstoque($id_estoque)
    {

        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT id_estoque,
                               tipo_movimento,
                               produto_estoque,
                               obs_estoque,
                               data_estoque,
                               quanditade_estoque
                        FROM tb_estoque
                        WHERE id_estoque = ?
                        AND id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $id_estoque);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    // public function AlterarEstoque()
    // {



    // }

    // public function ExcluirEstoque()
    // [



    // ]
}
