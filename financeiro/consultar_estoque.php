<?php

require_once '../DAO/EstoqueDAO.php';

$produto = '';

$objDAO = new EstoqueDAO();

if (isset($_POST['btnPesquisar'])) {

    $nome_produto = $_POST['nome_produto'];

    $estoques_cadastrados = $objDAO->FiltrarEstoque($produto);

    if (!is_array($estoques_cadastrados)) {

        $ret = $estoques_cadastrados;
    } elseif (count($estoques_cadastrados) == 0) {

        $ret = -5;
    }
}

$estoques = $objDAO->ConsultarEstoque();

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
                        <h2>Consultar Estoque</h2>
                        <h5>Consulte todos os produtos em seu estoque. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr>
                <?php if (isset($estoques) && is_array($estoques) && count($estoques) > 0) { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Resultado encontrado.
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Produto</th>
                                                    <th>Quantidade</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                for ($i = 0; $i < count($estoques); $i++) {
                                                ?>
                                                    <tr class="odd gradeX">
                                                        <td><?= $estoques[$i]['produto_estoque'] ?></td>
                                                        <td><?= $estoques[$i]['quantidade_estoque'] ?></td>
                                                        <td><a href="#" class="btn btn-danger btn-sm">Excluir</a></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /. PAGE INNER  -->
                    </div>
                <?php } ?>
                <!-- /. PAGE WRAPPER  -->
            </div>
        </div>
    </div>

    <?php include_once '_footer.php'; ?>

</body>

</html>