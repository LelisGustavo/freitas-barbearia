<?php

if (isset($_GET['nome']) && $_GET['nome'] != '' &&
    isset($_GET['sobrenome']) && $_GET['sobrenome'] != ''
   ) {

    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $nome_completo = "$nome $sobrenome";

   } else {
    header("location: ex15.php");
    exit;
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 16</title>
</head>
<body>
    <label>Nome completo: <?= $nome_completo ?></label>
</body>
</html>