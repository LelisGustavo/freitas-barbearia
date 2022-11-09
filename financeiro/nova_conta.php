<?php

require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/ContaDAO.php';

if (isset($_POST['btnGravar'])) {

    $nome_banco = $_POST['nome_banco'];
    $agencia = $_POST['agencia'];
    $numero_conta = $_POST['numero_conta'];
    $saldo = $_POST['saldo'];

    $objDAO = new ContaDAO();

    $ret = $objDAO->CadastrarConta($nome_banco, $agencia, $numero_conta, $saldo);

}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once '_head.php';
?>

<body>
    <div id="wrapper">
        <?php
        include_once '_topo.php';
        include_once '_menu.php';
        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php include_once '_msg.php'; ?>
                        <h2>Nova Conta</h2>
                        <h5>Aqui você poderá cadastrar todas as suas contas. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="nova_conta.php" method="post">
                    <div class="form-group" id="div_conta_1">
                        <label>Nome do banco*</label>
                        <input class="form-control" name="nome_banco" id="nome_banco" placeholder="Digite o nome do banco.." maxlength="20" />
                    </div>
                    <div class="form-group" id="div_conta_2">
                        <label>Agência*</label>
                        <input class="form-control" name="agencia" id="agencia" placeholder="Digite a agência" maxlength="8" />
                    </div>
                    <div class="form-group" id="div_conta_3">
                        <label>Número da conta*</label>
                        <input class="form-control" name="numero_conta" id="numero_conta" placeholder="Digite o número da conta" maxlength="12" />
                    </div>
                    <div class="form-group" id="div_conta_4">
                        <label>Saldo*</label>
                        <input class="form-control" name="saldo" id="saldo" placeholder="Digite o saldo da conta" maxlength="10" />
                    </div>
                    <button type="submit" class="btn btn-success" name="btnGravar" onclick="return ValidarConta()">Gravar</button>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

    <?php include_once '_footer.php'; ?>

</body>

</html>