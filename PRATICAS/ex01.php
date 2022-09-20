<?php

if (isset($_POST['btn_mostrar'])) {

    $nome = $_POST['nome'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];

    echo "$nome <br> 
          $rua <br> 
          $bairro <br> 
          $cep <hr>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 01</title>
</head>

<body>
    <form action="ex01.php" method="post">
        <label>Nome completo:</label>
        <input type="text" name="nome">
        <br>
        <label>Rua:</label>
        <input type="text" name="rua">
        <br>
        <label>Bairro:</label>
        <input type="text" name="bairro">
        <br>
        <label>CEP:</label>
        <input type="text" name="cep">
        <br>
        <button name="btn_mostrar">Mostrar</button>
    </form>
</body>

</html>