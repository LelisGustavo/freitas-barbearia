<?php

class ContaDAO
{

    public function CadastrarConta($nome_banco, $agencia, $numero_conta, $saldo)
    {

        if (trim($nome_banco) == '' || trim($agencia) == '' || trim($numero_conta) == '' || trim($saldo) == '') {

            return 0;
        }
    }
}
