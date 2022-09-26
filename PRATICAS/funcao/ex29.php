<?php

function ValidarIngrediente($ingrediente)
{

    if (trim(strlen($ingrediente)) <= 3) {
        // echo "Campo INGREDIENTES deverá conter pelo menos 3 caracteres <br>";
        return false;
    } else {
        return true;
    }
}

function ValidarQuantidadeKG($qtd_kg)
{

    if (trim($qtd_kg) <= 0) {
        // echo "Campo QTD DE KG não pode ter valores negativos <br>";
        return false;
    } else {
        return true;
    }
}

function ValidarValor($valor)
{

    if (trim($valor) <= 0) {
        // echo "Campo VALOR KG não pode ter valores negativos <br>";
        return false;
    } else {
        return true;
    }
}

function ValidarQuantidadeImpressao($qtd_imp)
{

    if (trim($qtd_imp) <= 0) {
        // echo "Campo QTD DE IMPRESSÃO não pode ter valores negativos <br>";
        return false;
    } else {
        return true;
    }
}
