<?php

require_once '../DAO/EstoqueDAO.php';

$objDAO = new EstoqueDAO();

$estoques = $objDAO->ConsultarEstoque();

// echo '<pre>';
// print_r($estoques);
// echo '</pre>';

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
                        <h5>Consulte todos seu estoque cadastrados aqui. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Estoque cadastrados. Caso deseje alterar, clique no botão
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Produto</th>
                                        <th>Tipo</th>
                                        <th>Data</th>
                                        <th>Quantidade</th>
                                        <th>Observação</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($estoques as $item) { ?>
                                        <tr class="odd gradeX">
                                            <td><?= $item['produto_estoque'] ?></td>
                                            <td><?= $item['tipo_movimento'] == 1 ? 'Entrada' : 'Saída' ?></td>
                                            <td><?= $item['data_estoque'] ?></td>
                                            <td><?= $item['quantidade_estoque'] ?></td>
                                            <td><?= $item['obs_estoque'] ?></td>
                                            <td><a href="alterar_estoque.php?cod=<?= $item['id_agenda'] ?>" class="btn btn-warning btn-sm">Alterar</a></td>
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
        <!-- /. PAGE WRAPPER  -->
    </div>

    <?php include_once '_footer.php'; ?>

</body>

</html>