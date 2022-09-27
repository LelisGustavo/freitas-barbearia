<?php

require_once 'classe/Calculadora.php';

if (isset($_POST['btn_calcular'])) {

    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];
    $op = $_POST['op'];

    $obj = new Calculadora();

    $res = $obj->CalcularCalculadora($val1, $val2, $op);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 32</title>
</head>

<body>
    <center>
        <form action="ex32.php" method="post">
            <label>Valor 1</label>
            <input type="text" name="val1" value="<?= isset($val1) ? $val1 : '' ?>">

            <select name="op">
                <option value="+">Somar</option>
                <option value="-">Subtrair</option>
                <option value="*">Multiplicar</option>
                <option value="/">Dividir</option>
            </select>

            <label>Valor 2</label>
            <input type="text" name="val2" value="<?= isset($val2) ? $val2 : '' ?>">

            <input disabled value="<?= isset($res) ? $res : '' ?>">

            <button name="btn_calcular">Calcular</button>
        </form>
    </center>
</body>

</html>