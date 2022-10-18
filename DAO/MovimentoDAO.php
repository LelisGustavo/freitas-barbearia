<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';
class MovimentoDAO extends Conexao
{

    public function RealizarMovimento($tipo_movimento, $categoria, $data, $empresa, $valor, $conta, $obs)
    {

        if (trim($tipo_movimento) == '' || trim($categoria) == '' || trim($data) == '' || trim($empresa) == '' || trim($valor) == '' || trim($conta) == '') {

            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'INSERT INTO tb_movimento
                        (tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
                        VALUES
                        (?, ?, ?, ?, ?, ?, ?, ?)'; // 8 Values

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $tipo_movimento);
        $sql->bindValue(2, $data);
        $sql->bindValue(3, $valor);
        $sql->bindValue(4, $obs == '' ? null : $obs);
        $sql->bindValue(5, $empresa);
        $sql->bindValue(6, $conta);
        $sql->bindValue(7, $categoria);
        $sql->bindValue(8, UtilDAO::CodigoLogado());

        $conexao->beginTransaction();

        try {

            //Inserção na tb_movimento
            $sql->execute();

            if ($tipo_movimento == 1) {

                $comando_sql = 'UPDATE tb_conta
                                SET saldo_conta = saldo_conta + ?
                                WHERE id_conta = ?';
            } elseif ($tipo_movimento == 2) {

                $comando_sql = 'UPDATE tb_conta
                                SET saldo_conta = saldo_conta - ?
                                WHERE id_conta = ?';
            }

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, $valor);
            $sql->bindValue(2, $conta);

            //Atualizar o saldo da conta
            $sql->execute();

            $conexao->commit();

            return 1;
        } catch (Exception $ex) {

            echo $ex->getMessage();

            $conexao->rollBack();

            return -1;
        }
    }

    public function FiltrarMovimento($tipo_movimento, $data_inicial, $data_final)
    {

        if (trim($data_inicial) == '' || trim($data_final) == '') {

            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT tipo_movimento,
                                DATE_FORMAT(data_movimento, "%d/%m/%Y") AS data_movimento,
                                valor_movimento,
                                nome_categoria,
                                nome_empresa,
                                banco_conta,
                                numero_conta,
                                agencia_conta,
                                obs_movimento
                        FROM tb_movimento
                        INNER JOIN tb_categoria
                            ON tb_categoria.id_categoria = tb_movimento.id_categoria
                        INNER JOIN tb_empresa
                            ON tb_empresa.id_empresa = tb_movimento.id_empresa
                        INNER JOIN tb_conta
                            ON tb_conta.id_conta = tb_movimento.id_conta
                        WHERE tb_movimento.id_usuario = ?
                        AND tb_movimento.data_movimento BETWEEN ? AND ?';

        if ($tipo_movimento != 0) {

            $comando_sql = $comando_sql . 'AND tipo_movimento = ?';
        }

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());
        $sql->bindValue(2, $data_inicial);
        $sql->bindValue(3, $data_final);

        if ($tipo_movimento != 0) {

            $sql->bindValue(4, $tipo_movimento);
        }

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }
}
