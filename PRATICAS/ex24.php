<!-- 2) Crie um formulário no qual o usuário digite 5 frutas. Após o clique do botão CONFIRMAR, deverá ser criado um array para guardar as 5 frutas. Em seguida, deverá ser mostrado (usar o comando FOR) cada fruta guardada com a seguinte frase:
"FRUTA GUARDADA NA POSIÇÃO X é : XXXXX" -->

<?php

if (isset($_POST['btn_confirmar'])) {

    $fruta1 = trim($_POST['fruta1']);
    $fruta2 = trim($_POST['fruta2']);
    $fruta3 = trim($_POST['fruta3']);
    $fruta4 = trim($_POST['fruta4']);
    $fruta5 = trim($_POST['fruta5']);

    if ($fruta1 == '' || $fruta2 == '' || $fruta3 == '' || $fruta4 == '' || $fruta5 == '') {
        echo "Preencher os campos corretamente!";
    } else {

        $frutas = array();

        $frutas[0] = $fruta1;
        $frutas[1] = $fruta2;
        $frutas[2] = $fruta3;
        $frutas[3] = $fruta4;
        $frutas[4] = $fruta5;

        for ($i = 0; $i < count($frutas); $i++) {
            echo "Fruta guardada na posição [$i] é : $frutas[$i]<br>";
        }
        echo "<hr>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 24</title>
</head>

<body>
    <form action="ex24.php" method="post">
        <label>Fruta 1: </label>
        <input type="text" name="fruta1" value="<?= isset($fruta1) ? $fruta1 : '' ?>">
        <br>
        <label>Fruta 2: </label>
        <input type="text" name="fruta2" value="<?= isset($fruta2) ? $fruta2 : '' ?>">
        <br>
        <label>Fruta 3: </label>
        <input type="text" name="fruta3" value="<?= isset($fruta3) ? $fruta3 : '' ?>">
        <br>
        <label>Fruta 4: </label>
        <input type="text" name="fruta4" value="<?= isset($fruta4) ? $fruta4 : '' ?>">
        <br>
        <label>Fruta 5: </label>
        <input type="text" name="fruta5" value="<?= isset($fruta5) ? $fruta5 : '' ?>">
        <br>
        <button name="btn_confirmar">Confirmar</button>
    </form>
</body>

</html>