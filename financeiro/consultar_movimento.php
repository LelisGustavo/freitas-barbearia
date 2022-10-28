<?php

require_once '../DAO/MovimentoDAO.php';

$tipo_movimento = '';

if (isset($_POST['btnPesquisar'])) {

    $tipo_movimento = $_POST['tipo_movimento'];
    $data_inicial = $_POST['data_inicial'];
    $data_final = $_POST['data_final'];

    $objDAO = new MovimentoDAO();

    $movimentos = $objDAO->FiltrarMovimento($tipo_movimento, $data_inicial, $data_final);
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
                        <h2>Consultar Movimento</h2>
                        <h5>Consulte todos os movimentos em um determinado período. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="consultar_movimento.php" method="post">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label>Tipo do movimento</label>
                            <select class="form-control" name="tipo_movimento" id="tipo_movimento">
                                <option value="0" <?= $tipo_movimento == '0' ? 'selected' : '' ?>>TODOS</option>
                                <option value="1" <?= $tipo_movimento == '1' ? 'selected' : '' ?>>Entrada</option>
                                <option value="2" <?= $tipo_movimento == '2' ? 'selected' : '' ?>>Saída</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group" id="div_movimento_1">
                            <label>Data inicial*</label>
                            <input class="form-control" type="date" id="data_inicial" name="data_inicial" value="<?= isset($data_inicial) ? $data_inicial : '' ?>" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group" id="div_movimento_2">
                            <label>Data final*</label>
                            <input class="form-control" type="date" id="data_final" name="data_final" value="<?= isset($data_final) ? $data_final : '' ?>" />
                        </div>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-info" name="btnPesquisar" onclick="return ValidarConsultaPeriodo()">Pesquisar</button>
                    </center>
                </form>
                <hr>
                <?php if (isset($movimentos) && is_array($movimentos) && count($movimentos) > 0) { ?>
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
                                                    <th>Tipo</th>
                                                    <th>Categoria</th>
                                                    <th>Empresa</th>
                                                    <th>Conta</th>
                                                    <th>Valor</th>
                                                    <th>Observação</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $total = 0;

                                                for ($i = 0; $i < count($movimentos); $i++) {

                                                    if ($movimentos[$i]['tipo_movimento'] == 1) {

                                                        $total = $total + $movimentos[$i]['valor_movimento'];
                                                    } elseif ($movimentos[$i]['tipo_movimento'] == 2) {

                                                        $total = $total - $movimentos[$i]['valor_movimento'];
                                                    }
                                                ?>
                                                    <tr class="odd gradeX">
                                                        <td><?= $movimentos[$i]['data_movimento'] ?></td>
                                                        <td><?= $movimentos[$i]['tipo_movimento'] == 1 ? 'Entrada' : 'Saída' ?></td>
                                                        <td><?= $movimentos[$i]['nome_categoria'] ?></td>
                                                        <td><?= $movimentos[$i]['nome_empresa'] ?></td>
                                                        <td><?= $movimentos[$i]['banco_conta'] ?> /
                                                            Agência <?= $movimentos[$i]['agencia_conta'] ?> -
                                                            Número <?= $movimentos[$i]['numero_conta'] ?></td>
                                                        <td>R$ <?= number_format($movimentos[$i]['valor_movimento'], 2, ',', '.') ?></td>
                                                        <td><?= $movimentos[$i]['obs_movimento'] ?></td>
                                                        <td><a href="#" class="btn btn-danger btn-sm">Excluir</a></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <center>
                                            <label style="color: <?= $total < 0 ? 'red' : 'green' ?> ;">TOTAL: R$ <?= number_format($total, 2, ',', '.'); ?></label>
                                        </center>
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