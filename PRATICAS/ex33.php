<?php

require_once 'classe/Combustivel.php';

if (isset($_POST['btn_calcular'])) {

    $litros = $_POST['litros'];
    $tipo = $_POST['tipo'];

    $obj = new Combustivel();

    $total = $obj->CalcularTotalListros($litros, $tipo);

    echo "<center>";
    if ($total == 0) {
        echo "Preencher os campos";
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
    <title>Ex 33</title>
</head>
<body>
    <center>
    <form action="ex33.php" method="post">
        <label>Tipo de Combustível</label>
        <select name="tipo">
            <option value="">Selecione</option>
            <option value="gasolina" <?= $tipo == 'gasolina' ? 'selected' : '' ?>>Gasolina</option>
            <option value="etanol" <?= $tipo == 'etanol' ? 'selected' : '' ?>>Etanol</option>
        </select>
        <label>Litros</label>
        <input type="text" name="litros" value="<?= isset($litros) ? $litros : '' ?>">
        <button name="btn_calcular">Calcular</button>
        <input disabled value="<?= isset($total) ? $total : '' ?>">
    </form>
    </center>
</body>
</html>