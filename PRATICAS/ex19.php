<!-- Faça uma página com o nome "ex2_pegarinvestimento.php" que permita o usuário digitar seu nome, valor do investimento e escolher o banco. As opções da tela serão:

Nome:_________
Valor do investimento:__________

Situação do investimento
-"Ganho de 3%" - SIGLA "G"
-"Perca de 5%" - SILGA "P"

E as opções de escolha do banco serão:
-"Santander" - SILGA "SA"
-"NuBank" - SIGLA "IT"
-"Caixa" - SIGLA "SI"
Digite a sigla:_______ 

Botão VER RESULTADO 

Após o clique VER RESULTADO, validar os campos:
-Nenhum campo poderá estar vazio, Caso esteja, informar o campo irregular, mantendo os valors nos demais campos 
-No campo "Situação do investimento", não podera ser digitado outro valor da sigla, as siglas válidas são: G e P 
-No campo "Escolha do banco", não poderá ser digitado outro valor da sigla, as siglas válidas são : "SA", "NU", "CA"

Após tudo validado, deverá chamar a pagina ".........." enviando todas as informações digitadas pelo usuário via GET, testá-las (vendo se as chaves e valores estão vindo corretamente) e montar no HTML as seguinte informações:

CLIENTE (nome vindo da URL), seu valor de investimento foi de (valor vindo da URL), a sigla de sua simulação escolhida foi (situ......). O banco escolhido foi (nome banco) e o resultado é de R$ (resultado calculado).
-->

<?php

if (isset($_POST['btn_resultado'])) {

    $nome = $_POST['nome'];
    $invest = $_POST['invest'];
    $sit = $_POST['sit'];
    $banco = $_POST['banco'];

    if (trim($nome) == '') {
        echo "Preencher o campo NOME";
    } elseif (trim($invest) == '') {
        echo "Preencher o campo INVESTIMENTO";
    } elseif ($sit != "P" && $sit != "G") {
        echo "Por favor, digite a sigla correta da SITUAÇÃO";
    } elseif ($banco != "SA" && $banco != "NU" && $banco != "CA") {
        echo "Por favor, digite a sigla correta do BANCO";
    } else {
        $nome_banco = '';

        if ($banco == "SA") {
            $nome_banco = "Santander";
        } elseif ($banco == "NU") {
            $nome_banco = "NuBank";
        } elseif ($banco == "CA") {
            $nome_banco = "Caixa";
        }

        $parametro = "nome=$nome&invest=$invest&sit=$sit&banco=$nome_banco";

        header("location: ex20.php?$parametro");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 19</title>
</head>

<body>

    <form action="ex19.php" method="post">
        <label>Nome: </label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <label>Valor do investimento R$ </label>
        <input type="text" name="invest" value="<?= isset($invest) ? $invest : '' ?>">
        <br>
        <ul>Situação do Investimento
            <li>Ganho de 3% (Sigla "G")</li>
            <li>Perca de 5% (Sigla "P")</li>
        </ul>
        <input type="text" name="sit" value="<?= isset($sit) ? $sit : '' ?>" placeholder="Digite a sigla desejada">
        <br>
        <ul>Banco:
            <li>Santander Sigla ("SA")</li>
            <li>NuBank Sigla ("NU")</li>
            <li>Caixa Sigla ("CA")</li>
        </ul>
        <input type="text" name="banco" value="<?= isset($banco) ? $banco : '' ?>" placeholder="Digite a sigla do banco desejado">
        <br><br>
        <button name="btn_resultado">Ver resultado</button>
    </form>

</body>

</html>