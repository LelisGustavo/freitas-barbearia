<?php

$numero = '';

if (isset($_POST['btn_verificar'])) {
    $numero = trim($_POST['numero']);

    if (trim($numero) == '') {
        echo "Por favor digite um número!";
    } else if ($numero > 100) {
        echo "Número $numero é maior que 100!";
    } else if ($numero == 100) {
        echo "Número $numero é igual 100!";
    } else {
        echo "Número $numero é menor que 100!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 09</title>
</head>

<body>
    <form action="ex09.php" method="post">
        <label>Digite um número: </label>
        <input type="text" name="numero" value="<?= $numero ?>">
        <button name="btn_verificar">Verificar</button>
    </form>
</body>

</html>