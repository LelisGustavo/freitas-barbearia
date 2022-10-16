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

    public function ConsultarEmpresa()
    {

        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT id_empresa,
                               nome_empresa,
                               telefone_empresa,
                               endereco_empresa
                        FROM tb_empresa
                        WHERE id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function DetalharEmpresa($id_empresa)
    {

        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT id_empresa,
                               nome_empresa,
                               telefone_empresa,
                               endereco_empresa
                        FROM tb_empresa
                        WHERE id_empresa = ?
                        AND id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $id_empresa);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function AlterarEmpresa($id_empresa, $nome_empresa, $telefone, $endereco)
    {
        if (trim($id_empresa) == '' || trim($nome_empresa) == '') {
            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'UPDATE tb_empresa
                        SET nome_empresa = ?, 
                            telefone_empresa = ?, 
                            endereco_empresa = ?
                        WHERE id_empresa = ?
                        AND id_usuario = ?';

        $sql = new PDOStatement;

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome_empresa);
        $sql->bindValue(2, $telefone);
        $sql->bindValue(3, $endereco);
        $sql->bindValue(4, $id_empresa);
        $sql->bindValue(5, UtilDAO::CodigoLogado());

        try {

            $sql->execute();

            return 1;
        } catch (Exception $ex) {

            echo $ex->getMessage();

            return -1;
        }
    }

    public function ExcluirEmpresa($id_empresa)
    {

        if (trim($id_empresa) == '') {

            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'DELETE
                        FROM tb_empresa
                        WHERE id_empresa = ?
                        AND id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $id_empresa);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        try {

            $sql->execute();

            return 1;
        } catch (Exception $ex) {

            echo $ex->getMessage();

            return -4;
        }
    }

    public function FiltrarEmpresa($filtrar_nome)
    {

        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT nome_empresa, telefone_empresa, endereco_empresa,
                               id_empresa
                        FROM tb_empresa
                        WHERE id_usuario = ?
                        AND nome_empresa LIKE ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());
        $sql->bindValue(2, '%' . $filtrar_nome . '%');

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();

    }

    public function FiltrarTelefone($filtrar_telefone) 
    {
        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT nome_empresa, telefone_empresa, endereco_empresa,
                               id_empresa
                        FROM tb_empresa
                        WHERE id_usuario = ?
                        AND telefone_empresa LIKE ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());
        $sql->bindValue(2, '%' . $filtrar_telefone . '%');

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll(); 
    }

    public function FiltrarEndereco($filtrar_endereco) 
    {
        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT nome_empresa, telefone_empresa, endereco_empresa,
                               id_empresa
                        FROM tb_empresa
                        WHERE id_usuario = ?
                        AND endereco_empresa LIKE ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());
        $sql->bindValue(2, '%' . $filtrar_endereco . '%');

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll(); 
    }
}
