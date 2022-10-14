<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';
class EmpresaDAO extends Conexao
{

    public function CadastrarEmpresa($nome_empresa, $telefone, $endereco)
    {

        if (trim($nome_empresa) == '') {

            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'INSERT INTO tb_empresa
                        (nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
                        VALUES
                        (?, ?, ?, ?)'; // 4 Values

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome_empresa);
        $sql->bindValue(2, $telefone == '' ? null : $telefone);
        $sql->bindValue(3, $endereco == '' ? null : $endereco);
        $sql->bindValue(4, UtilDAO::CodigoLogado());

        try {
            $sql->execute();

            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();

            return -1;
        }
    }
}
