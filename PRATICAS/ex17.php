<?php

if (isset($_POST['btn_calcular'])) {

    $nome = $_POST['nome'];
    $peso = $_POST['peso'];
    $alt = $_POST['alt'];

    if (trim($nome) == '' && is_numeric($nome)) {
        echo "Preencha o campo NOME corretamente!";
    } elseif (trim($peso) == '' && !is_numeric($peso)) {
        echo "Preencha o campo PESO corretamente!";
    } elseif (trim($alt) == '' && !is_numeric($alt)) {
        echo "Preencha o campo ALTURA corretamente!";
    } else {
        header("location: ex18.php?nome=$nome&peso=$peso&alt=$alt");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 17</title>
</head>

<body>
    <form action="ex17.php" method="post">
        <label>Nome: </label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <label>Peso: </label>
        <input type="text" name="peso" value="<?= isset($peso) ? $peso : '' ?>">
        <label>Altura: </label>
        <input type="text" name="alt" value="<?= isset($alt) ? $alt : '' ?>">
        <button name="btn_calcular">Calcular</button>
    </form>
</body>

</html>