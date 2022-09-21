<!-- 1) Faça uma página no qual o usuário terá que digitar 3 valores. Logo após o clique do botão Calcular, será necessário: 
- Somar o primeiro e o ultimo número e o resultado dividir pelo segundo número digitado. Exiba o resultado em um campo desabilitado. Obs: Todos os valores deverão ser mantidos nos campos, após o clique do botão Calcular -->

<?php
$n1 = '';
$n2 = '';
$n3 = '';
$total = '';
if (isset($_POST['btn_calcular'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    if (trim($n1) == '' && trim($n2) == '' && trim($n3) == '') {
        echo "Preecher os campos";
    } else {
        $soma = $n1 + $n3;
        $total = $soma / $n2;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 06</title>
</head>

<body>
    <form action="ex06.php" method="post">
        <label>Núemro 1</label>
        <input type="text" name="n1" value="<?= $n1 ?>">
        <label>Núemro 2</label>
        <input type="text" name="n2" value="<?= $n2 ?>">
        <label>Núemro 3</label>
        <input type="text" name="n3" value="<?= $n3 ?>">
        <button name="btn_calcular">Calcular</button>
        <input disabled value="<?= $total ?>">
    </form>
</body>

</html>