<!-- 3) Crie um formulário no qual o usuário digite os ganhos e percas de cada mês:

- Ganho do mês Jan: _____  - Perca do mês Jan: _____  Lucro: ____
- Ganho do mês Fev: _____  - Perca do mês Fev: _____  Lucro: ____
- Ganho do mês Mar: _____  - Perca do mês Mar: _____  Lucro: ____
- Ganho do mês Abr: _____  - Perca do mês Abr: _____  Lucro: ____
- Ganho do mês Mai: _____  - Perca do mês Mai: _____  Lucro: ____
- Ganho do mês Jun: _____  - Perca do mês Jun: _____  Lucro: ____
- Ganho do mês Jul: _____  - Perca do mês Jul: _____  Lucro: ____
- Ganho do mês Ago: _____  - Perca do mês Ago: _____  Lucro: ____
- Ganho do mês Set: _____  - Perca do mês Set: _____  Lucro: ____
- Ganho do mês Out: _____  - Perca do mês Out: _____  Lucro: ____
- Ganho do mês Nov: _____  - Perca do mês Nov: _____  Lucro: ____
- Ganho do mês Dez: _____  - Perca do mês Dez: _____  Lucro: ____

BOTÃO CALCULAR 

Ao clicar no botão deverá calcular:
- Total de lucro de cada mês(campo desabilitado)
- Total de ganho do ano(campo desabilitado)
- Total de perca do ano(campo desabilitado)
- Total de lucro do ano(campo desabilitado)
**Exibir os resultados nos campos desabilitados
-->

<?php

$gan_jan = '';
$gan_fev = '';
$gan_mar = '';
$gan_abr = '';
$gan_mai = '';
$gan_jun = '';
$gan_jul = '';
$gan_ago = '';
$gan_set = '';
$gan_out = '';
$gan_nov = '';
$gan_dez = '';

$per_jan = '';
$per_fev = '';
$per_mar = '';
$per_abr = '';
$per_mai = '';
$per_jun = '';
$per_jul = '';
$per_ago = '';
$per_set = '';
$per_out = '';
$per_nov = '';
$per_dez = '';

$luc_jan = '';
$luc_fev = '';
$luc_mar = '';
$luc_abr = '';
$luc_mai = '';
$luc_jun = '';
$luc_jul = '';
$luc_ago = '';
$luc_set = '';
$luc_out = '';
$luc_nov = '';
$luc_dez = '';

$tot_gan = '';
$tot_per = '';
$tot_luc = '';

if (isset($_POST['btn_calcular'])) {
    $gan_jan = $_POST['gan_jan'];
    $gan_fev = $_POST['gan_fev'];
    $gan_mar = $_POST['gan_mar'];
    $gan_abr = $_POST['gan_abr'];
    $gan_mai = $_POST['gan_mai'];
    $gan_jun = $_POST['gan_jun'];
    $gan_jul = $_POST['gan_jul'];
    $gan_ago = $_POST['gan_ago'];
    $gan_set = $_POST['gan_set'];
    $gan_out = $_POST['gan_out'];
    $gan_nov = $_POST['gan_nov'];
    $gan_dez = $_POST['gan_dez'];

    $per_jan = $_POST['per_jan'];
    $per_fev = $_POST['per_fev'];
    $per_mar = $_POST['per_mar'];
    $per_abr = $_POST['per_abr'];
    $per_mai = $_POST['per_mai'];
    $per_jun = $_POST['per_jun'];
    $per_jul = $_POST['per_jul'];
    $per_ago = $_POST['per_ago'];
    $per_set = $_POST['per_set'];
    $per_out = $_POST['per_out'];
    $per_nov = $_POST['per_nov'];
    $per_dez = $_POST['per_dez'];

    $luc_jan = $gan_jan - $per_jan;
    $luc_fev = $gan_fev - $per_fev;
    $luc_mar = $gan_mar - $per_mar;
    $luc_abr = $gan_abr - $per_abr;
    $luc_mai = $gan_mai - $per_mai;
    $luc_jun = $gan_jun - $per_jun;
    $luc_jul = $gan_jul - $per_jul;
    $luc_ago = $gan_ago - $per_ago;
    $luc_set = $gan_set - $per_set;
    $luc_out = $gan_out - $per_out;
    $luc_nov = $gan_nov - $per_nov;
    $luc_dez = $gan_dez - $per_dez;

    $tot_gan = $gan_jan + $gan_fev + $gan_mar + $gan_abr + $gan_mai + $gan_jun +
               $gan_jul + $gan_ago + $gan_set + $gan_out + $gan_nov + $gan_dez;

    $tot_per = $per_jan + $per_fev + $per_mar + $per_abr + $per_mai + $per_jun +
               $per_jul + $per_ago + $per_set + $per_out + $per_nov + $per_dez;

    $tot_luc = $luc_jan + $luc_fev + $luc_mar + $luc_abr + $luc_mai + $luc_jun +
               $luc_jul + $luc_ago + $luc_set + $luc_out + $luc_nov + $luc_dez;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 08</title>
</head>

<body>
    <form action="ex08.php" method="post">
        <label>Ganho do mês Jan:</label>
        <input type="text" name="gan_jan" value="<?= $gan_jan ?>">
        <label>Perca do mês Jan:</label>
        <input type="text" name="per_jan" value="<?= $per_jan ?>">
        <label>Lucro:</label>
        <input disabled value="<?= $luc_jan ?>">
        <br>
        <label>Ganho do mês Fev:</label>
        <input type="text" name="gan_fev" value="<?= $gan_fev ?>">
        <label>Perca do mês Fev:</label>
        <input type="text" name="per_fev" value="<?= $per_fev ?>">
        <label>Lucro:</label>
        <input disabled value="<?= $luc_fev ?>">
        <br>
        <label>Ganho do mês Mar:</label>
        <input type="text" name="gan_mar" value="<?= $gan_mar ?>">
        <label>Perca do mês Mar:</label>
        <input type="text" name="per_mar" value="<?= $per_mar ?>">
        <label>Lucro:</label>
        <input disabled value="<?= $luc_mar ?>">
        <br>
        <label>Ganho do mês Abr:</label>
        <input type="text" name="gan_abr" value="<?= $gan_abr ?>">
        <label>Perca do mês Abr:</label>
        <input type="text" name="per_abr" value="<?= $per_abr ?>">
        <label>Lucro:</label>
        <input disabled value="<?= $luc_abr ?>">
        <br>
        <label>Ganho do mês Mai:</label>
        <input type="text" name="gan_mai" value="<?= $gan_mai ?>">
        <label>Perca do mês Mai:</label>
        <input type="text" name="per_mai" value="<?= $per_mai ?>">
        <label>Lucro:</label>
        <input disabled value="<?= $luc_mai ?>">
        <br>
        <label>Ganho do mês Jun:</label>
        <input type="text" name="gan_jun" value="<?= $gan_jun ?>">
        <label>Perca do mês Jun:</label>
        <input type="text" name="per_jun" value="<?= $per_jun ?>">
        <label>Lucro:</label>
        <input disabled value="<?= $luc_jun ?>">
        <br>
        <label>Ganho do mês Jul:</label>
        <input type="text" name="gan_jul" value="<?= $gan_jul ?>">
        <label>Perca do mês Jul:</label>
        <input type="text" name="per_jul" value="<?= $per_jul ?>">
        <label>Lucro:</label>
        <input disabled value="<?= $luc_jul ?>">
        <br>
        <label>Ganho do mês Ago:</label>
        <input type="text" name="gan_ago" value="<?= $gan_ago ?>">
        <label>Perca do mês Ago:</label>
        <input type="text" name="per_ago" value="<?= $per_ago ?>">
        <label>Lucro:</label>
        <input disabled value="<?= $luc_ago ?>">
        <br>
        <label>Ganho do mês Set:</label>
        <input type="text" name="gan_set" value="<?= $gan_set ?>">
        <label>Perca do mês Set:</label>
        <input type="text" name="per_set" value="<?= $per_set ?>">
        <label>Lucro:</label>
        <input disabled value="<?= $luc_set ?>">
        <br>
        <label>Ganho do mês Out:</label>
        <input type="text" name="gan_out" value="<?= $gan_out ?>">
        <label>Perca do mês Out:</label>
        <input type="text" name="per_out" value="<?= $per_out ?>">
        <label>Lucro:</label>
        <input disabled value="<?= $luc_out ?>">
        <br>
        <label>Ganho do mês Nov:</label>
        <input type="text" name="gan_nov" value="<?= $gan_nov ?>">
        <label>Perca do mês Nov:</label>
        <input type="text" name="per_nov" value="<?= $per_nov ?>">
        <label>Lucro:</label>
        <input disabled value="<?= $luc_nov ?>">
        <br>
        <label>Ganho do mês Dez:</label>
        <input type="text" name="gan_dez" value="<?= $gan_dez ?>">
        <label>Perca do mês Dez:</label>
        <input type="text" name="per_dez" value="<?= $per_dez ?>">
        <label>Lucro:</label>
        <input disabled value="<?= $luc_dez ?>">
        <br>
        <button name="btn_calcular">Calcular</button>
        <hr>
        <label>Total de ganho do ano:</label>
        <input disabled value="<?= $tot_gan ?>">
        <br>
        <label>Total de perca do ano:</label>
        <input disabled value="<?= $tot_per ?>">
        <br>
        <label>Total de lucro do ano:</label>
        <input disabled value="<?= $tot_luc ?>">
    </form>
</body>

</html>