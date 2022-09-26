<?php

require_once 'funcao/ex28.php';

if (isset($_POST['btn_calcular'])) {

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];


    $soma_tres = SomaTresPrimeiros($n1, $n2, $n3, $n4, $n5);
    if ($soma_tres == 0) {
        echo "<center>";
        echo "Preenche os campos corretemante <hr>";
        echo "</center>";
    }
    $total = MultiplicarSomaEOutrosValores($soma_tres, $n4, $n5);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 28</title>
</head>

<body>
    <center>
    <form action="ex28.php" method="post">
        <label>Número 1: </label>
        <input type="text" name="n1" value="<?= isset($n1) ? $n1 : '' ?>">
        <br>
        <label>Número 2: </label>
        <input type="text" name="n2" value="<?= isset($n2) ? $n2 : '' ?>">
        <br>
        <label>Número 3: </label>
        <input type="text" name="n3" value="<?= isset($n3) ? $n3 : '' ?>">
        <br>
        <label>Número 4: </label>
        <input type="text" name="n4" value="<?= isset($n4) ? $n4 : '' ?>">
        <br>
        <label>Número 5: </label>
        <input type="text" name="n5" value="<?= isset($n5) ? $n5 : '' ?>">
        <br><br>
        <button name="btn_calcular">Calcular</button>
        <br><br>
        <label>Resultado da soma dos 3º números</label>
        <input disabled value="<?= isset($soma_tres) ? $soma_tres : '' ?>">
        <br>
        <label>Total do Calculo</label>
        <input disabled value="<?= isset($total) ? $total : '' ?>">
    </form>
    </center>
</body>

</html>