<?php

require_once '../DAO/EstoqueDAO.php';

$objDAO = new EstoqueDAO;

if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {

    $id_estoque = $_GET['cod'];

    $dados = $objDAO->DetalharEstoque($id_estoque);

    if (count($dados) == 0) {

        header('location: consultar_estoque.php');
        exit;
    }
} elseif (isset($_POST['btnSalvar'])) {

    $produto = $_POST['produto_estoque'];
    $quantidade = $_POST['quanditade_estoque'];
    $data = $_POST['data_estoque'];

    header('location: consultar_estoque.php?ret=' . $ret);
    exit;
} elseif (isset($_POST['btnExcluir'])) {



    header('location: consultar_estoque.php?ret=' . $ret);
    exit;
} 
// else {

//     header('location: consultar_estoque.php');
//     exit;
// }

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
                        <?php require_once '_msg.php'; ?>
                        <h2>Alterar Estoque</h2>
                        <h5>Aqui você poderá alterar ou excluir seu estoque. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="alterar_estoque.php" method="post">
                    <input type="hidden" name="cod" value="<?= $dados[0]['id_estoque'] ?>">
                    <div class="col-md-4">
                        <div class="form-group" id="div_estoque_1">
                            <label>Estoque a ser alterado*</label>
                            <input class="form-control" name="produto_estoque" id="produto_estoque" value="<?= $dados[0]['produto_estoque'] ?>" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group" id="div_estoque_2">
                            <label>Quantidade*</label>
                            <input class="form-control" type="number" name="quanditade_estoque" id="quanditade_estoque" value="<?= $dados[0]['quanditade_estoque'] ?>" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group" id="div_estoque_3">
                            <label>Data*</label>
                            <input class="form-control" type="date" name="data_estoque" id="data_estoque" value="<?= $dados[0]['data_estoque'] ?>" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Observação (opcional)</label>
                            <textarea class="form-control" name="obs" rows="3"><?= $dados[0]['obs_agenda'] ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" name="btnSalvar" class="btn btn-success" onclick="return ValidarEstoque()">Salvar</button>
                        <button type="button" data-toggle="modal" data-target="#modalExcluir" class="btn btn-danger">Excluir</button>
                    </div>

                    <div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Confirmação de exclusão</h4>
                                </div>
                                <div class="modal-body">
                                    Deseja excluir o serviço: <b> <?= $dados[0]['nome_servico'] ?> </b> <br>
                                    No horário agendado para <b> <?= $dados[0]['horario_agenda'] ?> </b>
                                    <br>
                                    Na data programada <b><?= $dados[0]['data_agenda'] ?></b> ?
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
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->


    <?php include_once '_footer.php'; ?>

</body>

</html>