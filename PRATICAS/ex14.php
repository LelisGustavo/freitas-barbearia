<!-- 6)Faca um formulário que contenha as seguintes informação:

Salário:[_________]
[Calcular]

Aumento de 15% do salário: xxx
Aumento de 18% do salário: xxx 
Total de aumento: xxxx

Se a soma total dos aumentos estiver:

0 - 100 : exibir a mensagem "Aumento RUIM"
101 - 200 : exibir a mensagem "Aumento RAZOAVEL"
201 - 300 : exibir a mensagem "Aumento BOM"
301 - 400 : exibir a mensagem "Aumento ÓTIMO"
acima de 401: exibir a mensagem "Aumento EXCELENTE" -->

<?php

$sal = '';
$aum_15 = '';
$aum_18 = '';
$aum_15_aux = '';
$aum_18_aux = '';
$tot_aum = '';

if (isset($_POST['btn_calcular'])) {
    $sal = $_POST['sal'];

    if (trim($sal) == '' || !is_numeric($sal)) {
        echo "Preencher o campo SALÁRIO!<hr>";
    } else {
        $aum_15_aux = ($sal * 15) / 100;
        $aum_18_aux = ($sal * 18) / 100;
        $aum_15 = $sal + $aum_15_aux;
        $aum_18 = $sal + $aum_18_aux;
        $tot_aum = $aum_15_aux + $aum_18_aux;

        if ($tot_aum > 0 && $tot_aum <= 100) {
            echo "Aumento RUIM";
        } elseif ($tot_aum >= 101 && $tot_aum <= 200) {
            echo "Aumento RAZOAVEL";
        } elseif ($tot_aum >= 201 && $tot_aum <= 300) {
            echo "Aumento BOM";
        } elseif ($tot_aum >= 301 && $tot_aum <= 400) {
            echo "Aumento ÓTIMO";
        } elseif ($tot_aum >= 401) {
            echo "Aumento EXCELENTE";
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
    <title>Ex 14</title>
</head>
<body>
    <form action="ex14.php" method="post">
        <label>Salário R$</label>
        <input type="text" name="sal" value="<?= $sal ?>">
        <button name="btn_calcular">Calcular</button>
        <br>
        <label>Aumento de 15% do salário</label>
        <input disabled value="<?= $aum_15 ?>">
        <br>
        <label>Aumento de 18% do salário</label>
        <input disabled value="<?= $aum_18 ?>">
        <br>
        <label>Total de aumento</label>
        <input disabled value="<?= $tot_aum ?>">
    </form>
</body>
</html>