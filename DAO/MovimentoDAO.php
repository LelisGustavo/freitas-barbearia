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
}
