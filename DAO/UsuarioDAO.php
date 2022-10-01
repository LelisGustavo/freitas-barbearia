<?php

class UsuarioDAO
{

    public function CarregarMeusDados()
    {
    }

    public function GravarMeusDados($nome, $email)
    {

        if (trim($nome) == '' || trim($email) == '' || is_numeric($nome)) {

            return 0;
        }
    }
}
