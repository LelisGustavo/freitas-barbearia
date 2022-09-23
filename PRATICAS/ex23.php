<!-- 1) Crie um formulário no qual o usuário digite seu nome e sua idade. Depois digite a quantidade de vezes que deverá se repetir seu nome com sua idade. Após o clique do botão VER, deverá repetir a quantidade de vezes que o usuário informou:
  "MEU NOME É XX, TENHO XX ANOS DE IDADE"
Obs: Aonde tem o X deverá mostrar o valor. Para resolução deste exercício, deverá ser usado o comando FOR -->

<?php

if (isset($_POST['btn_ver'])) {

    $nome = trim($_POST['nome']);
    $idade = trim($_POST['idade']);
    $qtd = trim($_POST['qtd']);

    if ($nome == '' || is_numeric($nome) || $idade == '' || !is_numeric($idade) || $qtd == '' || !is_numeric($qtd)) {
        echo "Preencher os campos corretamente <hr>";
    } else {

        for ($i = 0; $i < $qtd; $i++) {
            echo "Meu nome é $nome, tenho $idade anos de idade <br>";
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
    <title>Ex 23</title>
</head>

<body>
    <form action="ex23.php" method="post">
        <label>Nome: </label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <label>Idade: </label>
        <input type="text" name="idade" value="<?= isset($idade) ? $idade : '' ?>">
        <br><br>
        <label>Digite a quantidade de vezes que deverá se repetir:</label>
        <input type="text" name="qtd" value="<?= isset($qtd) ? $qtd : '' ?>">
        <br><br>
        <button name="btn_ver">Ver</button>
    </form>
</body>

</html>