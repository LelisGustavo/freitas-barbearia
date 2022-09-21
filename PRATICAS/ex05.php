<?php

$n1 = '';
$n2 = '';
$somar = '';

$n3 = '';
$n4 = '';
$subtrair = '';

$n5 = '';
$n6 = '';
$multiplicar = '';

$n7 = '';
$n8 = '';
$dividir = '';

if (isset($_POST['btn_somar'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    if (trim($n1) == '' && trim($n2) == '') {
        echo "Preencher os campos de SOMA correntamente";
    } else {
        $somar = $n1 + $n2;
    }
} else if (isset($_POST['btn_subtrair'])) {
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];

    if (trim($n3) == '' && trim($n4) == '') {
        echo "Preencher os campos de SUBTRAIR correntamente";
    } else {
        $subtrair = $n3 + $n4;
    }
} else if (isset($_POST['btn_multiplicar'])) {
    $n5 = $_POST['n5'];
    $n6 = $_POST['n6'];

    if (trim($n5) == '' && trim($n6) == '') {
        echo "Preencher os campos de MULTIPLICAÇÃO correntamente";
    } else {
        $multiplicar = $n5 + $n6;
    }
} else if (isset($_POST['btn_dividir'])) {
    $n7 = $_POST['n7'];
    $n8 = $_POST['n8'];

    if (trim($n7) == '' && trim($n8) == '') {
        echo "Preencher os campos de DIVISÃO correntamente";
    } else {
        $dividir = $n7 + $n8;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 05</title>
</head>

<body>
    <form action="ex05.php" method="post">
        <label>Número 1</label>
        <input type="text" name="n1" value="<?= $n1 ?>">
        <label>Número 2</label>
        <input type="text" name="n2" value="<?= $n2 ?>">
        <button name="btn_somar">Somar</button>
        <input disabled value="<?= $somar ?>">
        <hr>
    </form>

    <form action="ex05.php" method="post">
        <label>Número 1</label>
        <input type="text" name="n3" value="<?= $n3 ?>">
        <label>Número 2</label>
        <input type="text" name="n4" value="<?= $n4 ?>">
        <button name="btn_subtrair">Subtrair</button>
        <input disabled value="<?= $subtrair ?>">
        <hr>
    </form>
    <hr>

    <form action="ex05.php" method="post">
        <label>Número 1</label>
        <input type="text" name="n5" value="<?= $n6 ?>">
        <label>Número 2</label>
        <input type="text" name="n6" value="<?= $n6 ?>">
        <button name="btn_multiplicar">Multiplicar</button>
        <input disabled value="<?= $multiplicar ?>">
        <hr>
    </form>
    <hr>

    <form action="ex05.php" method="post">
        <label>Número 1</label>
        <input type="text" name="n7" value="<?= $n7 ?>">
        <label>Número 2</label>
        <input type="text" name="n8" value="<?= $n8 ?>">
        <button name="btn_dividir">Dividir</button>
        <input disabled value="<?= $dividir ?>">
        <hr>
    </form>
    <hr>
</body>

</html>