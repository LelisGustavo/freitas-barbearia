<?php

if (
    isset($_GET['ing']) && $_GET['ing'] != '' &&
    isset($_GET['qtd']) && $_GET['qtd'] != '' &&
    isset($_GET['val']) && $_GET['val'] != '' &&
    isset($_GET['qtd_imp']) && $_GET['qtd_imp'] != ''
) {

    $ing = $_GET['ing'];
    $qtd = $_GET['qtd'];
    $val = $_GET['val'];
    $qtd_imp = $_GET['qtd_imp'];

    for ($i = 0; $i < $qtd_imp; $i++) {
        echo "<center>
        Nome do Ingrediente: <b> $ing </b>
        <br>
        Qtd de Kg: <b> $qtd </b>
        <br>
        Valor Kg R$ <b> $val </b>
        <br>
        Total Gasto R$:" .  '<b>' . $qtd * $val . '</b>' . '
        <hr></center>';
    }
} else {
    header("location: ex29.php");
    exit;
}
