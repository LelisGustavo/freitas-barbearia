<?php

require_once 'funcao/ex26.php';

if (isset($_POST['btn_validar'])) {

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $senha = $_POST['senha'];
    $repetir_senha = $_POST['repetir_senha'];

    $conferir = '';
    echo '<center>';

    if (!ValidarPalavra($nome, 3)) {
        $conferir = 'Nome deverá conter no mínimo 3 caracteres<br>';
    }

    if (!ValidarPalavra($descricao, 50)) {
        $conferir .= 'Descrição deverá conter no mínimo 50 caracteres<br>';
    }

    if (!ValidarPalavra($senha, 6)) {
        $conferir .= 'Senha deverá conter no mínimo 6 caracteres<br>';
    } else if (!ConferirRepetirSenha($senha, $repetir_senha)) {
        $conferir .= 'Os campos Senha e Repetir Senha deverão ser iguais<br>';
    }

    if ($conferir == '') {
        echo "CAMPOS VALIDOS COM SUCESSO<hr>";
    } else {
        echo $conferir;
    }

    echo '</center>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 26</title>
</head>

<body>
    <center>
        <form action="ex26.php" method="post">
            <label>Nome: </label>
            <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
            <br><br>
            <label>Descrição: </label>
            <textarea name="descricao" cols="25" rows="5" <?php echo $_POST['descricao'] ?> placeholder="Descrição..."></textarea>
            <br><br>
            <label>Senha: </label>
            <input type="password" name="senha" value="<?= isset($senha) ? $senha : '' ?>">
            <br><br>
            <label>Repetir Senha: </label>
            <input type="password" name="repetir_senha" value="<?= isset($repetir_senha) ? $repetir_senha : '' ?>">
            <br><br>
            <button name="btn_validar">Validar</button>
        </form>
    </center>
</body>

</html>