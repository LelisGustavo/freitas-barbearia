<?php

require_once '../DAO/EstoqueDAO.php';

$produto = '';

$objDAO = new EstoqueDAO();

if (isset($_POST['btnPesquisar'])) {

    $nome_produto = $_POST['nome_produto'];
    $data_inicial = $_POST['data_inicial'];
    $data_final = $_POST['data_final'];

    $estoques = $objDAO->FiltrarEstoque($produto, $data_inicial, $data_final);

    if (!is_array($estoques)) {

        $ret = $estoques;
    } elseif (count($estoques) == 0) {

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
                        <h2>Consultar Estoque</h2>
                        <h5>Consulte todos os produtos em seu estoque. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="consultar_movimento.php" method="post">
                    <div class="col-md-12">
                        <div class="form-group" id="div_estoque_1">
                            <label>Produto*</label>
                            <select class="form-control" name="nome_produto" id="nome_produto">
                                <option value="">Selecione</option>
                                <?php foreach ($estoques as $item) { ?>
                                    <option value="<?= $item['id_estoque'] ?>" 
                                                   <?= $produto == $item['id_estoque'] ? 'selected' : '' ?>> 
                                                   <?= $item['produto_estoque'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" id="div_estoque_2">
                            <label>Data inicial*</label>
                            <input class="form-control" type="date" id="data_inicial" name="data_inicial" value="<?= isset($data_inicial) ? $data_inicial : '' ?>" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group" id="div_estoque_3">
                            <label>Data final*</label>
                            <input class="form-control" type="date" id="data_final" name="data_final" value="<?= isset($data_final) ? $data_final : '' ?>" />
                        </div>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-info" name="btnPesquisar" onclick="return ValidarConsultaPeriodoEstoque()">Pesquisar</button>
                    </center>
                </form>
                <hr>
                <?php if (isset($estoques) && is_array($estoques) && count($estoques)) { ?>
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
                                                    <th>Data</th>
                                                    <th>Produto</th>
                                                    <th>Tipo</th>
                                                    <th>Quantidade</th>
                                                    <th>Observação</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                for ($i = 0; $i < count($estoques); $i++) {
                                                ?>
                                                    <tr class="odd gradeX">
                                                        <td><?= $estoques[$i]['data_estoque'] ?></td>
                                                        <td><?= $estoques[$i]['produto_estoque'] ?></td>
                                                        <td><?= $estoques[$i]['tipo_movimento'] == 1 ? 'Entrada' : 'Saída' ?></td>
                                                        <td><?= $estoques[$i]['quantidade_estoque'] ?></td>
                                                        <td><?= $estoques[$i]['obs_estoque'] ?></td>
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