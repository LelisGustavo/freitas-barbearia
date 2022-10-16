<?php

require_once '../DAO/ContaDAO.php';

$objDAO = new ContaDAO();

if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {

    $id_conta = $_GET['cod'];

    $dados = $objDAO->DetalharConta($id_conta);

    if (count($dados) == 0) {

        header('location: consultar_conta.php');
        exit;
    }
} elseif (isset($_POST['btnSalvar'])) {

    $id_conta = $_POST['cod'];
    $nome_banco = $_POST['nome_banco'];
    $agencia_conta = $_POST['agencia'];
    $numero_conta = $_POST['numero_conta'];
    $saldo = $_POST['saldo'];

    $ret = $objDAO->AlterarConta($id_conta, $nome_banco, $agencia_conta, $numero_conta, $saldo);

    header('location: consultar_conta.php?ret=' . $ret);
    exit;
} elseif (isset($_POST['btnExcluir'])) {

    $id_conta = $_POST['cod'];

    $ret = $objDAO->ExcluirConta($id_conta);

    header('location: consultar_conta.php?ret=' . $ret);
    exit;
} else {

    header('location: consultar_conta.php');
    exit;
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
                        <h2>Alterar Conta</h2>
                        <h5>Aqui você poderá alterar todas as suas contas. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="alterar_conta.php" method="post">
                    <input type="hidden" name="cod" value="<?= $dados[0]['id_conta'] ?>">
                    <div class="form-group" id="div_conta_1">
                        <label>Nome do banco*</label>
                        <input class="form-control" name="nome_banco" id="nome_banco" placeholder="Digite o nome do banco.." value="<?= $dados[0]['banco_conta'] ?>" />
                    </div>
                    <div class="form-group" id="div_conta_2">
                        <label>Agência*</label>
                        <input class="form-control" name="agencia" id="agencia" placeholder="Digite a agência" value="<?= $dados[0]['agencia_conta'] ?>" />
                    </div>
                    <div class="form-group" id="div_conta_3">
                        <label>Número da conta*</label>
                        <input class="form-control" name="numero_conta" id="numero_conta" placeholder="Digite o número da conta" value="<?= $dados[0]['numero_conta'] ?>" />
                    </div>
                    <div class="form-group" id="div_conta_4">
                        <label>Saldo*</label>
                        <input class="form-control" name="saldo" id="saldo" placeholder="Digite o saldo da conta" value="<?= $dados[0]['saldo_conta'] ?>" />
                    </div>
                    <button type="submit" class="btn btn-success" name="btnSalvar" onclick="return ValidarConta()">Salvar</button>
                    <button type="button" data-toggle="modal" data-target="#modalExcluir" class="btn btn-danger">Excluir</button>

                    <div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Confirmação de exclusão</h4>
                                </div>
                                <div class="modal-body">
                                    Deseja excluir a conta: <b> <?= $dados[0]['banco_conta'] ?> </b> <br> Agência:
                                                            <b> <?= $dados[0]['agencia_conta'] ?> </b> <br> Número:
                                                            <b> <?= $dados[0]['numero_conta'] ?> </b> ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" name="btnExcluir" class="btn btn-primary">Sim</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

    <?php include_once '_footer.php'; ?>

</body>

</html>