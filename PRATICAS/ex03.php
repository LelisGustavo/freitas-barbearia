<!-- 2) Crie uma página chamada ex2_formulario.php no qual o usuário digite: Nome da empresa, site, facebook, instagram, descrição da empresa. Mostre o resultado, em PHP, da digitação com as informações uma abaixo da outra:
Nome da empresa: xxxxxxx
Site: xxxxxxx
Facebook: xxxxxxx
Instagram: xxxxxxx
Descrição: xxxxxxx -->

<?php

if (isset($_POST['btn_mostrar'])) {
    $nome_empresa = $_POST['nome'];
    $site = $_POST['site'];
    $facebook = $_POST['face'];
    $instagram = $_POST['insta'];
    $descricao = $_POST['desc'];

    echo "Nome da empresa: $nome_empresa <br>
          Site: $site <br>
          Facebook: $facebook <br>
          Instragam: $instagram <br>
          Descrição: $descricao <hr>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 03</title>
</head>

<body>
    <form action="ex03.php" method="post">
        <label>Nome da Empresa:</label>
        <input type="text" name="nome">
        <br>
        <label>Site:</label>
        <input type="text" name="site">
        <br>
        <label>Facebook:</label>
        <input type="text" name="face">
        <br>
        <label>Instagram:</label>
        <input type="text" name="insta">
        <br>
        <label>Descrição</label>
        <input type="text" name="desc">
        <br>
        <button name="btn_mostrar">Mostrar Informações</button>
    </form>
</body>

</html>