<?php

function ValidarCampos($valor)
{

    if (trim($valor) == '' || !is_numeric($valor)) {
        return false;
    } else {
        return true;
    }
}

function ChecarMinimo($valor_digitado, $valor_permitido_min)
{

    if ($valor_digitado < $valor_permitido_min) {
        return false;
    } else {
        return true;
    }
}

function ChecarMaximo($valor_digitado, $valor_permitido_max)
{

    if ($valor_digitado > $valor_permitido_max) {
        return false;
    } else {
        return true;
    }
}

function ChecarMeio($valor_digitado, $valor_permitido_max)
{

    $meio = $valor_permitido_max / 2;

    if ($meio != $valor_digitado) {
        return true;
    } else {
        return false;
    }
}

function ChecarMargem($valor_digitado, $valor_permitido_min, $valor_permitido_max)
{

    if ($valor_digitado >= $valor_permitido_min && $valor_digitado <= $valor_permitido_max) {
        return true;
    } else {
        return false;
    }
}
