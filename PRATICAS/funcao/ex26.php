<?php

function ValidarPalavra($texto, $qtd)
{

    if (trim(strlen($texto)) < trim($qtd)) {
        return false;
    } else {
        return true;
    }

}

function ConferirRepetirSenha($senha, $repetir_senha)
{

    if (trim($senha) != trim($repetir_senha)) {
        return false;
    } else {
        return true;
    }
}
