<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';
class ContaDAO extends Conexao
{

    public function CadastrarConta($nome_banco, $agencia, $numero_conta, $saldo)
    {

        if (trim($nome_banco) == '' || trim($agencia) == '' || trim($numero_conta) == '' || trim($saldo) == '') {

            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'INSERT INTO tb_conta
                        (banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
                        VALUES
                        (?, ?, ?, ?, ?)'; // 5 Values

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome_banco);
        $sql->bindValue(2, $agencia);
        $sql->bindValue(3, $numero_conta);
        $sql->bindValue(4, $saldo);
        $sql->bindValue(5, UtilDAO::CodigoLogado());

        try {
            $sql->execute();

            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();

            return -1;
        }
    }
}
