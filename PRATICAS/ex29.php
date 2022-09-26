<?php

require_once 'funcao/ex29.php';

if (isset($_POST['btn_verificar'])) {

    $ing = $_POST['ing'];
    $qtd = $_POST['qtd'];
    $val = $_POST['val'];
    $qtd_imp = $_POST['qtd_imp'];

    $conferir = '';

    echo '<center>';

    if (!ValidarIngrediente($ing)) {
        $conferir = "O campo INGREDIENTE não pode estar vazio e deverá ter ao menos 3 carqacteres!<br>";
    }

    if (!ValidarQuantidadeKG($qtd)) {
        $conferir .= "O campo QTD DE KG não pode estar vazio e não pode conter números negativos!<br>";
    }

    if (!ValidarValor($val)) {
        $conferir .= "O campo VALOR KG não pode estar vazio e não pode conter números negativos!<br>";
    }

    if (!ValidarQuantidadeImpressao($qtd_imp)) {
        $conferir .= "O campo QTDE DE IMPRESSÃO não pode estar vazio e não pode conter números negativos!<br>";
    }

    if ($conferir == '') {

        $parametro = "ing=$ing&qtd=$qtd&val=$val&qtd_imp=$qtd_imp";

        header("location: ex30.php?$parametro");
        exit;
    } else {
        echo $conferir;
    }

    echo '</center>';
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 29</title>
</head>

<body>
    <center>
        <form action="ex29.php" method="post">
            <label>Nome do Ingrediente</label>
            <input type="text" name="ing" value="<?= isset($ing) ? $ing : '' ?>">
            <br>
            <label>Qtd de Kg</label>
            <input type="text" name="qtd" value="<?= isset($qtd) ? $qtd : '' ?>">
            <br>
            <label>Valor Kg R$</label>
            <input type="text" name="val" value="<?= isset($val) ? $val : '' ?>">
            <br>
            <label>Qtd de Impressão</label>
            <input type="text" name="qtd_imp" value="<?= isset($qtd_imp) ? $qtd_imp : '' ?>">
            <br><br>
            <button name="btn_verificar">Verificar</button>
    </center>
    </form>
</body>

</html>