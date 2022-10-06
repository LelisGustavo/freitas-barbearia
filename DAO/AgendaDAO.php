<?php

class AgendaDAO
{

    public function CadastrarHorario($nome_servico, $horario, $data)
    {

        if (trim($nome_servico) == '' || trim($horario) == '' || trim($data) == '') {

            return 0;
        }
    }
}
