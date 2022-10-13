<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';
class AgendaDAO extends Conexao
{

    public function CadastrarHorario($nome_servico, $horario, $data, $obs)
    {

        if (trim($nome_servico) == '' || trim($horario) == '' || trim($data) == '') {

            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'INSERT INTO tb_agenda
                        (nome_servico, horario_agenda, data_agenda, obs_agenda, id_usuario)
                        VALUES
                        (?, ?, ?, ?, ?)';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome_servico);
        $sql->bindValue(2, $horario);
        $sql->bindValue(3, $data);
        $sql->bindValue(4, $obs);
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
