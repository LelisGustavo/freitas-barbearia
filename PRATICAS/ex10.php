<!-- 2) Crie uma página no qual o usuário digite 3 valores. Logo após o botão Verificar, é necessário calcular o valor do MEIO por 2 e o resultado verificar se está entre o primeiro e o último número. Caso esteja, mostrar: o numero X está entre o número INICIAL e FINAL. Caso contrário: o numero X NÃO está entre o número INICIAL e FINAL -->

<?php

$n1 = '';
$n2 = '';
$n3 = '';

$mult = '';

if (isset($_POST['btn_verificar'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    if (trim($n1) == '' && trim($mult) == '' && trim($n3) == '') {
        echo "Preencher os campos vazios!";
    } else {
        $mult = $n2 * 2;
        if ($n1 <= $mult && $n3 >= $mult) {
            echo "O valor $mult está entre $n1 e $n3";
        } else {
            echo "O valor $mult não está entre $n1 e $n3";
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
    <title>Ex 010</title>
</head>

<body>
    <form action="ex10.php" method="post">
        <label>Número 1:</label>
        <input type="text" name="n1" value="<?= $n1 ?>">
        <label>Número 2:</label>
        <input type="text" name="n2" value="<?= $n2 ?>">
        <label>Número 3:</label>
        <input type="text" name="n3" value="<?= $n3 ?>">
        <button name="btn_verificar">Verificar</button>
    </form>
</body>

</html>