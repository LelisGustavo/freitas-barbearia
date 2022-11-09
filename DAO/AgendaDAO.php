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
        $sql->bindValue(4, $obs == '' ? null : $obs);
        $sql->bindValue(5, UtilDAO::CodigoLogado());

        try {
            $sql->execute();

            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();

            return -1;
        }
    }

    public function ConsultarHorario()
    {

        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT id_agenda,
                               nome_servico,
                               horario_agenda,
                               DATE_FORMAT(data_agenda, "%d/%m/%Y") AS data_agenda,
                               obs_agenda
                        FROM tb_agenda
                        WHERE id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);
        
        $sql->execute();

        return $sql->fetchAll();

    }

    public function DetalharAgenda($id_agenda)
    {

        if ($id_agenda == '') {

            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT id_agenda,
                               nome_servico,
                               horario_agenda,
                               DATE_FORMAT(data_agenda, "%d/%m/%Y") AS data_agenda,
                               obs_agenda
                        FROM tb_agenda
                        WHERE id_agenda = ?
                        AND id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $id_agenda);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function AlterarAgenda($id_agenda, $nome_servico, $horario, $data, $obs)
    {

        if (trim($id_agenda) == '' || trim($nome_servico) == '' || trim($horario) == '' || trim($data) == '') {

            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'UPDATE tb_agenda
                        SET nome_servico = ?, 
                            horario_agenda = ?, 
                            data_agenda = ?, 
                            obs_agenda = ?
                        WHERE id_agenda = ?
                        AND id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome_servico);
        $sql->bindValue(2, $horario);
        $sql->bindValue(3, $data);
        $sql->bindValue(4, $obs);
        $sql->bindValue(5, $id_agenda);
        $sql->bindValue(6, UtilDAO::CodigoLogado());

        try {

            $sql->execute();

            return 1;
        } catch (Exception $ex) {

            echo $ex->getMessage();

            return -1;
        }
    }

    public function ExcluirAgenda($id_agenda)
    {

        if (trim($id_agenda) == '') {

            return 0;
        }

        $conexao = parent::retornarConexao();

        $comando_sql = 'DELETE
                        FROM tb_agenda
                        WHERE id_agenda = ?
                        AND id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $id_agenda);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        try {

            $sql->execute();

            return 1;
        } catch (Exception $ex) {

            echo $ex->getMessage();

            return -4;
        }
    }
}
