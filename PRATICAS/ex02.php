<!-- 1) Crie uma página chamada ex1_formulario.php, no qual contêm os seguintes campos:
- Nome do prato
- Descrição
- Preço
- Ingredientes

Mostre o resultado, em PHP, da digitação com as informações uma abaixo da outra:

Nome do prato: xxxxxxx
Descrição: xxxxxxx
Preço: xxxxxxx
Ingrediente: xxxxxxx -->
<?php

if (isset($_POST['btn_mostrar'])) {
    $prato = $_POST['prato'];
    $desc = $_POST['desc'];
    $preco = $_POST['preco'];
    $ing = $_POST['ing'];

    echo "Nome do prato: $prato <br> 
          Descrição: $desc <br> 
          Preço R$ $preco <br> 
          Ingredientes: $ing <hr>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 02</title>
</head>

<body>
    <form action="ex02.php" method="post">
        <label>Nome do prato:</label>
        <input type="text" name="prato">
        <label>Descrição</label>
        <input type="text" name="desc">
        <label>Preço R$</label>
        <input type="text" name="preco">
        <label>Ingredientes</label>
        <input type="text" name="ing">
        <button name="btn_mostrar">Mostrar</button>
    </form>
</body>

</html>