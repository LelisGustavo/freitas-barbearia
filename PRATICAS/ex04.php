<!-- 3) Crie uma página chamada ex3_formulario.php no qual o usuário digite: Nome do livro, Editora, Ano, Autores, Qtd de páginas, Valor do livro, Resumo. Mostre o resultado, em PHP, da digitação com as informações uma abaixo da outra:

Nome da livro: xxxxxxx Ano: XXXX
Editora: xxxxxxx  Qtd de páginas: XXXX
Autores: xxxxxxx
Valor: xxxxxxx
Resumo: xxxxxxx -->

<?php

if (isset($_POST['btn_mostrar'])) {
    $nome_livro = $_POST['nome'];
    $ano = $_POST['ano'];
    $editora = $_POST['edit'];
    $qtd_paginas = $_POST['qtd'];
    $autores = $_POST['aut'];
    $valor = $_POST['val'];
    $resumo = $_POST['res'];

    echo "Nome do livro: $nome_livro - Ano: $ano <br>
          Editora: $editora - Qtd de páginas: $qtd_paginas <br>
          Autores: $autores
          Valor R$ $valor
          Resumo: $resumo <hr>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 04</title>
</head>

<body>
    <form action="ex04.php" method="post">
        <label>Nome do Livro: </label>
        <input type="text" name="nome">
        <label>Ano: </label>
        <input type="text" name="ano">
        <br>
        <label>Editora: </label>
        <input type="text" name="edit">
        <label>Qtd de páginas</label>
        <input type="text" name="qtd">
        <br>
        <label>Autores: </label>
        <input type="text" name="aut">
        <br>
        <label>Valor R$</label>
        <input type="text" name="val">
        <br>
        <label>Resumo: </label>
        <input type="text" name="res">
        <br>
        <button name="btn_mostrar">Mostrar</button>
    </form>
</body>

</html>