<!-- 4) Crie uma página no qual o usuário digite seu salário e a porcentagem de aumento. Exemplo:
Salario: _______
Aumento: _______

Após o clique do botão "Calcular", deverá ser calculado a porcentagem aumentada (fórmula: salario_final = salario +  (salario * aumento) / 100) e exibir o salário final já com o aumento. Verifique e mostre a classificação deste aumento segundo a tabela abaixo:
0   - 100   : Aumento Nivel 1
101 - 200   : Aumento Nivel 2
201 - 300   : Aumento Nivel 3
301 - 400   : Aumento Nivel 4
acima de 400: Aumento Nivel 5 -->

<?php

$sal = '';
$aum = '';

if (isset($_POST['btn_calcular'])) {
    $sal = $_POST['sal'];
    $aum = $_POST['aum'];

    if (trim($sal) == '' && trim($aum) == '') {
        echo "Preencher todos os campos <hr>";
    } else {
        $sal_fim = $sal + (($sal * $aum) / 100);

        if ($sal_fim <= 100) {
            echo "R$ $sal_fim Aumento Nivel 1";
        } elseif ($sal_fim >= 101 && $sal_fim <= 200) {
            echo "R$ $sal_fim Aumento Nivel 2";
        } elseif ($sal_fim >= 201 && $sal_fim <= 300) {
            echo "R$ $sal_fim Aumento Nivel 3";
        } elseif ($sal_fim >= 301 && $sal_fim <= 400) {
            echo "R$ $sal_fim Aumento Nivel 4";
        } elseif ($sal_fim > 401) {
            echo "R$ $sal_fim Aumento Nivel 5";
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
    <title>Ex 12</title>
</head>

<body>
    <form action="ex12.php" method="post">
        <label>Salário R$</label>
        <input type="text" name="sal" value="<?= $sal ?>">
        <label>Aumento %</label>
        <input type="text" name="aum" value="<?= $aum ?>">
        <button name="btn_calcular">Calcular</button>
    </form>
</body>

</html>