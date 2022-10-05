<?php

class UsuarioDAO
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
    }

    public function GravarMeusDados($nome, $email)
    {

        if (trim($nome) == '' || trim($email) == '' || is_numeric($nome)) {

            return 0;
        }
    }
}
