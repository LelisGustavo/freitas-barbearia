<?php

if (
    isset($_GET['nome']) && $_GET['nome'] != '' &&
    isset($_GET['peso']) && $_GET['peso'] != '' &&
    isset($_GET['alt']) && $_GET['alt'] != ''
   ) {

    $nome = $_GET['nome'];
    $peso = $_GET['peso'];
    $alt = $_GET['alt'];

    $imc = $peso / ($alt * $alt);
    $classificação = '';

    if ($imc >= 0 && $imc <= 20) {
        $classificação = 'Magro';
    }elseif ($imc >= 21 && $imc <= 25) {
        $classificação = 'Peso ideal';
    }elseif ($imc >= 26 && $imc <= 30) {
        $classificação = 'Obeso';
    }elseif ($imc > 30) {
        $classificação = 'Muito obeso';
    }

} else {
    header("location: ex17.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 18</title>
</head>

<body>
    <label>Nome <?= isset($nome) ? $nome : '' ?></label>
    <label>IMC <?= isset($imc) ? $imc : '' ?></label>
    <label>Classificação do IMC <?= isset($classificação) ? $classificação : '' ?></label>
</body>

</html>