<!-- 3) Faça uma pagina no qual o usuario digite suas 4 notas. Seja calculado a media aritimética e mostre a situação do aluno:
0 a 39 : REPROVADO
40 a 59: EXAME
60 para cima : APROVADO -->

<?php

$n1 = '';
$n2 = '';
$n3 = '';
$n4 = '';

if (isset($_POST['btn_calcular'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];

    if (trim($n1) == '' && trim($n2) == '' && trim($n3) == '' && trim($n4) == '') {
        echo "Preencher os campos vazios <hr>";
    } else {
        $media = ($n1 + $n2 + $n3 + $n4) / 4;

        if ($media <= 39) {
            echo "Média $media, aluno REPROVADO <hr>";
        } elseif ($media >= 40 && $media <= 59) {
            echo "Média $media, aluno em EXAME <hr>";
        } elseif ($media >= 60 && $media <= 100) {
            echo "Média $media, aluno APROVADO <hr>";
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
    <title>Ex 11</title>
</head>

<body>
    <form action="ex11.php" method="post">
        <label>Digite a 1ª nota:</label>
        <input type="text" name="n1" value="<?= $n1 ?>">
        <br>
        <label>Digite a 2ª nota:</label>
        <input type="text" name="n2" value="<?= $n2 ?>">
        <br>
        <label>Digite a 3ª nota:</label>
        <input type="text" name="n3" value="<?= $n3 ?>">
        <br>
        <label>Digite a 4ª nota:</label>
        <input type="text" name="n4" value="<?= $n4 ?>">
        <br>
        <button name="btn_calcular">Calcular média</button>
    </form>
</body>

</html>