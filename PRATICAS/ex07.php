<!-- 2) Faça uma página no qual o usuário terá que digitas 7 valores. Logo após o clique do botão Calcular, será necessário: 
- Somar os tres primeiros números e o resultado somar com a multiplicação dos quatro ultimos números. Exiba o resultado em um campo desabilitado. Obs: Todos os valores deverão ser mantidos nos campos, após o clique do botão Calcular -->

<?php

$n1 = '';
$n2 = '';
$n3 = '';
$n4 = '';
$n5 = '';
$n6 = '';
$n7 = '';
$total = '';

if (isset($_POST['btn_calcular'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];
    $n6 = $_POST['n6'];
    $n7 = $_POST['n7'];

    if (trim($n1) == '' && trim($n2) == '' && trim($n3) == '' && trim($n4) == '' && trim($n5) == '' && trim($n5) == '' && trim($n7) == '') {
        echo "Preencher todos os campos corretamente";
    } else {
        $soma = $n1 + $n2 + $n3;
        $multiplicar = $n4 * $n5 * $n6 * $n7;
        $total = $soma + $multiplicar;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 07</title>
</head>

<body>
    <form action="ex07.php" method="post">
        <label>Número 1:</label>
        <input type="text" name="n1" value="<?= $n1 ?>">
        <br>
        <label>Número 2:</label>
        <input type="text" name="n2" value="<?= $n2 ?>">
        <br>
        <label>Número 3:</label>
        <input type="text" name="n3" value="<?= $n3 ?>">
        <br>
        <label>Número 4:</label>
        <input type="text" name="n4" value="<?= $n4 ?>">
        <br>
        <label>Número 5:</label>
        <input type="text" name="n5" value="<?= $n5 ?>">
        <br>
        <label>Número 6:</label>
        <input type="text" name="n6" value="<?= $n6 ?>">
        <br>
        <label>Número 7:</label>
        <input type="text" name="n7" value="<?= $n7 ?>">
        <br>
        <button name="btn_calcular">Calcular</button>
        <input disabled value="<?= $total ?>">
    </form>
</body>

</html>