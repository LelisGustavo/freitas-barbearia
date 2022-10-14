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

        try {
            $sql->execute();

            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();

            return -1;
        }
    }
}
