<?php

require_once 'funcao/ex27.php';

if (isset($_POST['btn_calcular'])) {

    $sal = $_POST['sal'];
    $porc = $_POST['porc'];

    $aumento = CalcularAumento($sal, $porc);
    if ($aumento == 0) {
        echo "<center>";
        echo "Preencher os campos corretamente <hr>";
        echo "</center>";
    }
    $resultado = NovoSalario($aumento, $sal);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 27</title>
</head>

<body>
    <center>
        <form action="ex27.php" method="post">
            <label>Sálario R$</label>
            <input type="text" name="sal" value="<?= isset($sal) ? $sal : '' ?>">
            <br>
            <label>% de Aumento: </label>
            <input type="text" name="porc" value="<?= isset($porc) ? $porc : '' ?>">
            <br><br>
            <button name="btn_calcular">Calcular</button>
            <br><br>
            <label>Valor do aumento R$</label>
            <input disabled value="<?= isset($aumento) ? $aumento : '' ?>">
            <br>
            <label>Novo Sálario</label>
            <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
        </form>
    </center>
</body>

</html>