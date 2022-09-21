<!-- 5)Crie um formulário no qual calcule o IMC (pes / (alt*alt)) do usuário e mostre a classificação:

0  a 20 : Magro
21 a 25 : Peso ideal
26 a 30 : Obeso
acima de 30 : Muito Obeso -->

<?php

$peso = '';
$alt = '';

if (isset($_POST['btn_calcular'])) {
    $peso = $_POST['peso'];
    $alt = $_POST['alt'];

    if (trim($peso) == '' && trim($alt) == '') {
        echo "Preencher todos os campos <hr>";
    } else {
        $imc = $peso / ($alt * $alt);

        if ($imc <= 20) {
            echo "$imc, status MAGRO";
        } elseif ($imc >= 21 && $imc <= 25) {
            echo "$imc, status PESO IDEAL";
        } elseif ($imc >= 26 && $imc <= 30) {
            echo "$imc, status OBESO";
        } elseif ($imc >= 31) {
            echo "$imc, status MUITO OBESEO";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 13</title>
</head>

<body>
    <form action="ex13.php" method="post">
        <label>Peso</label>
        <input type="text" name="peso" value="<?= $peso ?>">
        <label>Altura</label>
        <input type="text" name="alt" value="<?= $alt ?>">
        <button name="btn_calcular">Calcular</button>
    </form>
</body>

</html>