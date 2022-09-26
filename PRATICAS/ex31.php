<?php

require_once 'funcao/ex31.php';

define('grupoA_max', 8);
define('grupoA_min', 0);

define('grupoB_max', 20);
define('grupoB_min', 10);

define('grupoC_max', 10);
define('grupoC_min', 0);

define('grupoD_max', 100);
define('grupoD_min', -20);

define('grupoE_max', 260);
define('grupoE_min', 0);

if (isset($_POST['btn_verificar'])) {

    $grupoA = $_POST['grupoA'];
    $grupoB = $_POST['grupoB'];
    $grupoC = $_POST['grupoC'];
    $grupoD = $_POST['grupoD'];
    $grupoE = $_POST['grupoE'];

    if (
        !ValidarCampos($grupoA) ||
        !ValidarCampos($grupoB) ||
        !ValidarCampos($grupoC) ||
        !ValidarCampos($grupoD) ||
        !ValidarCampos($grupoE)
    ) {
        echo "Preencher os campos corretamente";
    } else {

        if (!ChecarMinimo($grupoA, grupoA_min)) {
            $css_grupoA = 'AbaixoMinimo';
        } else if (!ChecarMaximo($grupoA, grupoA_max)) {
            $css_grupoA = 'AcimaMaximo';
        } else if (!ChecarMeio($grupoA, grupoA_max)) {
            $css_grupoA = 'Meio';
        } else if (ChecarMargem($grupoA, grupoA_min, grupoA_max)) {
            $css_grupoA = 'Margem';
        }

        if (!ChecarMinimo($grupoB, grupoB_min)) {
            $css_grupoB = 'AbaixoMinimo';
        } else if (!ChecarMaximo($grupoB, grupoB_max)) {
            $css_grupoB = 'AcimaMaximo';
        } else if (!ChecarMeio($grupoB, grupoB_max)) {
            $css_grupoB = 'Meio';
        } else if (ChecarMargem($grupoB, grupoB_min, grupoB_max)) {
            $css_grupoB = 'Margem';
        }

        if (!ChecarMinimo($grupoC, grupoC_min)) {
            $css_grupoC = 'AbaixoMinimo';
        } else if (!ChecarMaximo($grupoC, grupoC_max)) {
            $css_grupoC = 'AcimaMaximo';
        } else if (!ChecarMeio($grupoC, grupoC_max)) {
            $css_grupoC = 'Meio';
        } else if (ChecarMargem($grupoC, grupoC_min, grupoC_max)) {
            $css_grupoC = 'Margem';
        }

        if (!ChecarMinimo($grupoD, grupoD_min)) {
            $css_grupoD = 'AbaixoMinimo';
        } else if (!ChecarMaximo($grupoD, grupoD_max)) {
            $css_grupoD = 'AcimaMaximo';
        } else if (!ChecarMeio($grupoD, grupoD_max)) {
            $css_grupoD = 'Meio';
        } else if (ChecarMargem($grupoD, grupoD_min, grupoD_max)) {
            $css_grupoD = 'Margem';
        }

        if (!ChecarMinimo($grupoE, grupoE_min)) {
            $css_grupoE = 'AbaixoMinimo';
        } else if (!ChecarMaximo($grupoE, grupoE_max)) {
            $css_grupoE = 'AcimaMaximo';
        } else if (!ChecarMeio($grupoE, grupoE_max)) {
            $css_grupoE = 'Meio';
        } else if (ChecarMargem($grupoE, grupoE_min, grupoE_max)) {
            $css_grupoE = 'Margem';
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
    <link rel="stylesheet" href="estilo.css">
    <title>Ex 31</title>
</head>

<body>
    <form action="ex31.php" method="post">
        <label>Grupo A</label>
        <input type="text" name="grupoA" value="<?= isset($grupoA) ? $grupoA : '' ?>" class="<?= isset($css_grupoA) ? $css_grupoA : '' ?>">
        <label>Grupo B</label>
        <input type="text" name="grupoB" value="<?= isset($grupoB) ? $grupoB : '' ?>" class="<?= isset($css_grupoB) ? $css_grupoB : '' ?>">
        <label>Grupo C</label>
        <input type="text" name="grupoC" value="<?= isset($grupoC) ? $grupoC : '' ?>" class="<?= isset($css_grupoC) ? $css_grupoC : '' ?>">
        <label>Grupo D</label>
        <input type="text" name="grupoD" value="<?= isset($grupoD) ? $grupoD : '' ?>" class="<?= isset($css_grupoD) ? $css_grupoD : '' ?>">
        <label>Grupo E</label>
        <input type="text" name="grupoE" value="<?= isset($grupoE) ? $grupoE : '' ?>" class="<?= isset($css_grupoE) ? $css_grupoE : '' ?>">
        <hr>
        <center>
            <button name="btn_verificar">Verificar</button>
        </center>
    </form>
</body>

</html>