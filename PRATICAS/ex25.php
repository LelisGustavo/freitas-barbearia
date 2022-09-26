<?php

require_once 'funcao/ex25.php';

if (isset($_POST['btn_calcular'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    if ($nome == '' || is_numeric($nome)) {
        echo "Preencher o campo NOME";
    } elseif ($sobrenome == '' || is_numeric($sobrenome)) {
        echo "Preencher o campo SOBRENOME";
    } else {

        $qtd_nome = ContarCaracteres($nome);

        if ($qtd_nome < 3) {
            echo "Nome inválido";
        }

        $qtd_sobrenome = ContarCaracteres($sobrenome);
        $total = SomaCaracteres($qtd_nome, $qtd_sobrenome);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 25</title>
</head>

<body>
    <form action="ex25.php" method="post">
        <label>Nome: </label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Sobrenome: </label>
        <input type="text" name="sobrenome" value="<?= isset($sobrenome) ? $sobrenome : '' ?>">
        <br>
        <button name="btn_calcular">Calcular caracteres</button>
        <br><br>
        <label>Qtd caracteres NOME</label>
        <input disabled value="<?= isset($qtd_nome) ? $qtd_nome : '' ?>">
        <br>
        <label>Qtd caracteres SOBRENOME</label>
        <input disabled value="<?= isset($qtd_sobrenome) ? $qtd_sobrenome : '' ?>">
        <br>
        <label>Total de caracteres</label>
        <input disabled value="<?= isset($total) ? $total : '' ?>">
    </form>
</body>

</html>