<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';
class UsuarioDAO extends Conexao
{

    public function CriarCadastro($nome, $email, $senha, $repetir_senha)
    {

        if (trim($nome) == '' || trim($email) == '' || trim($senha) == '' || trim($repetir_senha) == '') {

            return 0;
        }

        if (strlen($senha) < 6) {

            return -2;
        }

        if (trim($senha) != trim($repetir_senha)) {

            return -3;
        }
    }

    public function ValidarLogin($email, $senha)
    {

        if (trim($email) == '' || trim($senha) == '') {

            return 0;
        }
    }

    public function CarregarMeusDados()
    {

        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT nome_usuario, email_usuario
                        FROM tb_usuario
                        WHERE id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());

        // Remove os index dentro do array, permanecendo somente com as colunas do BD
        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function GravarMeusDados($nome, $email)
    {

        if (trim($nome) == '' || trim($email) == '' || is_numeric($nome)) {

            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'UPDATE tb_usuario
                        SET nome_usuario = ?,
                            email_usuario = ?
                        WHERE id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $email);
        $sql->bindValue(3, UtilDAO::CodigoLogado());

        try {
            $sql->execute();

            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();

            return -1;
        }
    }
}
