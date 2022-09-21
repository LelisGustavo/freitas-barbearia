<!-- 1) Crie um formulário no qual o usuário digite cinco valores no qual: devera ser feito a multiplicação dos 2 primeiros números e o resultado somar com a multiplicação dos 3 últimos números. O resultado deverá ser exibido e verificar:
- Se o resultado for acima de 100, mostrar: ACIMA DE 100, caso contrário: ABAIXO DE 100. Se for igual a 100, mostrar IGUAL A 100 -->

<?php

$n1 = '';
$n2 = '';
$n3 = '';
$n4 = '';
$n5 = '';

if (isset($_POST['btn_verificar'])) {

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];

    if (trim($n1) == '' && trim($n2) == '' && trim($n3) == '' && trim($n4) == '' && trim($n5) == '') {
        echo "Preencher todos os campos! <hr>";
    } else {
        $mult_1 = $n1 * $n2;
        $mult_2 = $n3 * $n4 * $n5;
        $total = $mult_1 + $mult_2;

        if ($total > 100) {
            echo "Número $total é maior que 100! <hr>";
        } else if ($total < 100) {
            echo "Número $total é menor que 100! <hr>";
        } else if ($total == 100) {
            echo "Número $total é igual a 100! <hr>";
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
    <title>Ex 09</title>
</head>

<body>
    <form action="ex09.php" method="post">
        <label>Digite o 1º número: </label>
        <input type="text" name="n1" value="<?= $n1 ?>">
        <br>
        <label>Digite o 2º número: </label>
        <input type="text" name="n2" value="<?= $n2 ?>">
        <br>
        <label>Digite o 3º número: </label>
        <input type="text" name="n3" value="<?= $n3 ?>">
        <br>
        <label>Digite o 4º número: </label>
        <input type="text" name="n4" value="<?= $n4 ?>">
        <br>
        <label>Digite o 5º número: </label>
        <input type="text" name="n5" value="<?= $n5 ?>">
        <br>
        <button name="btn_verificar">Verificar</button>
    </form>
</body>

</html>