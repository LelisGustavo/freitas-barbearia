<?php

if (isset($_POST['btn_ver'])) {
    $qtd = trim($_POST['qtd']);

    echo "Inicio da repetição <br><br> ";

    for ($i = 1; $i <= $qtd; $i++) {
        echo "O número da repetição é $i! <br>";
    }

    echo "<br><br> Fim da repetição";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 21</title>
</head>
<body>
    <form action="ex21.php" method="post">
        <label>Digite a quantidade de repetição</label>
        <input type="text" name="qtd" <?= isset($qtd) ? $qtd : '' ?>>
        <button name="btn_ver">Ver</button>
    </form>
</body>
</html>