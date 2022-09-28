<?php

include_once 'classe/Conversao.php';

if (isset($_POST['btn_converter'])) {

    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];

    $obj = new Conversao();

    $res = $obj->CalcularConversao($valor, $tipo);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 34</title>
</head>

<body>
    <center>
        <form action="ex34.php" method="post">
            <label>Valor</label>
            <input type="text" name="valor" value="<?= isset($valor) ? $valor : '' ?>">
            <select name="tipo">
                <option value="">Selecione</option>
                <option value="fahrenheit" <?= $tipo == 'fahrenheit' ? 'selected' : '' ?>>Fahrenheit para Celsius</option>
                <option value="celsius" <?= $tipo == 'celsius' ? 'selected' : '' ?>>Celsius para Fahrenheit</option>
            </select>
            <button name="btn_converter">Converter</button>
            <input disabled value="<?= isset($res) ? $res : '' ?>">
        </form>
    </center>
</body>

</html>