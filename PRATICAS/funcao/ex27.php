<?php

function CalcularAumento($salario, $porcentagem)
{

    if (trim(!is_numeric($salario)) || trim(!is_numeric($porcentagem))) {
        return 0;
    }

    $aumento = ($salario * $porcentagem) / 100;

    return $aumento;
}

function NovoSalario($aumento, $salario)
{

    if (trim(!is_numeric($aumento)) || trim(!is_numeric($salario))) {
        return 0;
    }

    $novo_salario = $aumento + $salario;

    return $novo_salario;
}
