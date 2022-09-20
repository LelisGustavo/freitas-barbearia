<?php

$n1 = '';
$n2 = '';
$n3 = '';

if (isset($_POST['btn_verificar'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    if (trim($n1) == '' && trim($n2) == '' && trim($n3) == '') {
        echo "Preencher os campos vazios!";
    } else if ($n1 <= $n2 && $n3 >= $n2) {
        echo "O valor $n2 está entre $n1 e $n3";
    } else {
        echo "O valor $n2 não está entre $n1 e $n3";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 010</title>
</head>

<body>
    <form action="ex010.php" method="post">
        <label>Número 1:</label>
        <input type="text" name="n1" value="<?= $n1 ?>">
        <label>Número 2:</label>
        <input type="text" name="n2" value="<?= $n2 ?>">
        <label>Número 3:</label>
        <input type="text" name="n3" value="<?= $n3 ?>">
        <button name="btn_verificar">Verificar</button>
    </form>
</body>

</html>