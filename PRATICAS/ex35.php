<?php

require_once 'classe/Calculo.php';

if (isset($_POST['btn_calcular'])) {

    $qtd_meses = $_POST['qtd_meses'];
    $ganho_medio = $_POST['ganho_medio'];
    $lucro = $_POST['lucro'];
    $perca = $_POST['perca'];

    $obj = new Calculo();

    $res = $obj->CalculoFinal($qtd_meses, $ganho_medio, $lucro, $perca);

    echo "<center>";
    if ($res == 0) {
        echo "Preencher todos os campos corretamente";
    }
    echo "</center>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 35</title>
</head>

<body>
    <center>
        <form action="ex35.php" method="post">
            <label>Qtd de meses trabalhado</label>
            <input type="text" name="qtd_meses" value="<?= isset($qtd_meses) ? $qtd_meses : '' ?>">
            <br><br>
            <label>Ganho médio mensal</label>
            <input type="text" name="ganho_medio" value="<?= isset($ganho_medio) ? $ganho_medio : '' ?>">
            <br><br>
            <label>% de lucro total</label>
            <input type="text" name="lucro" value="<?= isset($lucro) ? $lucro : '' ?>">
            <br><br>
            <label>% de perca total</label>
            <input type="text" name="perca" value="<?= isset($perca) ? $perca : '' ?>">
            <br><br>
            <label>TOTAL FINAL</label>
            <input disabled value="<?= isset($res) ? $res : '' ?>">
            <br><br>
            <button name="btn_calcular">Calcular</button>
    </center>
    </form>
</body>

</html>