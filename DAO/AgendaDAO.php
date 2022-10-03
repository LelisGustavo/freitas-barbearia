<?php

class AgendaDAO
{

    public function CadastrarHorario($nome_servico, $horario)
    {

        if (trim($nome_servico) == '' || trim($horario) == '') {

            return 0;
        }
    }
}
