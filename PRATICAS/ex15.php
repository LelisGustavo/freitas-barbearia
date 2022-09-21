<?php

if (isset($_POST['btn_mostrar'])) {

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    if (trim($nome) == '' && is_numeric($nome) && trim($sobrenome) == '' && is_numeric($sobrenome)) {
        echo "Preencher todos os campos corretamente!";
    } else {
        header("location: ex16.php?nome=$nome&sobrenome=$sobrenome");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 15</title>
</head>
<body>
    <form action="ex15.php" method="post">
        <label>Nome: </label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <label>Sobrenome: </label>
        <input type="text" name="sobrenome" value="<?= isset($sobrenome) ? $sobrenome : '' ?>">
        <button name="btn_mostrar">Mostrar</button>
    </form>
</body>
</html>