<?php

function ContarCaracteres($palavra)
{

    $qtd = trim(strlen($palavra));

    return $qtd;
}

function SomaCaracteres($qtd_1, $qtd_2)
{

    $total = trim($qtd_1) + trim($qtd_2);

    return $total;
}
