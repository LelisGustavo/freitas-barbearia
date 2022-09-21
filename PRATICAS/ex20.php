<?php

if (
    isset($_GET['nome']) && $_GET['nome'] != '' &&
    isset($_GET['invest']) && $_GET['invest'] != '' &&
    isset($_GET['sit']) && $_GET['sit'] != '' &&
    isset($_GET['banco']) && $_GET['banco'] != ''
    ) {

    $nome = $_GET['nome'];
    $invest = $_GET['invest'];
    $sit = $_GET['sit'];
    $banco = $_GET['banco'];

        $ganho = $invest + ($invest * 3 / 100);
        $perca = $invest - ($invest * 5 / 100);

        if ($sit == "G") {
            echo "CLIENTE <strong>$nome</strong>, seu valor de investimento foi de R$ <strong>$invest</strong>, a sigla de sua simulação escolhida foi <strong>$sit</strong>. O banco escolhido foi <strong>$banco</strong> e o resultado é de R$ <strong>$ganho</strong>.";
        } elseif ($sit == "P") {
            echo "CLIENTE <strong>$nome</strong>, seu valor de investimento foi de R$ <strong>$invest</strong>, a sigla de sua simulação escolhida foi <strong>$sit</strong>. O banco escolhido foi <strong>$banco</strong> e o resultado é de R$ <strong>$perca</strong>.";
        }

} else {
    header("location: ex19.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 20</title>
</head>
<body>
    
</body>
</html>