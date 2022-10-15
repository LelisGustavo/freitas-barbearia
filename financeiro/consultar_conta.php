<?php

require_once '../DAO/ContaDAO.php';

$objDAO = new ContaDAO();

$contas = $objDAO->ConsultarConta();

// echo '<pre>';
// print_r($contas);
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
                        <h2>Consultar Contas</h2>
                        <h5>Consulte todas suas contas aqui. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="form-group" id="divConta">
                    <center>
                        <label>Procurar por:</label>
                        <select class="btn btn-default dropdown-toggle" name="filtro">
                            <option value="">Selecione a opção</option>
                            <option value="conta_banco">Banco</option>
                            <option value="agencia_conta">Agência</option>
                            <option value="numero_conta">Número da conta</option>
                            <option value="saldo_conta">Saldo</option>
                        </select>
                    </center>
                    <br>
                    <input class="form-control" name="filtrar" id="filtrar" placeholder="Digite aqui..." value="">
                </div>
                <center>
                    <button type="submit" onclick="return ValidarConta()" name="btnPesquisar" class="btn btn-info">Pesquisar</button>
                </center>
                <br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Contas cadastradas. Caso deseje alterar, clique no botão.
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Banco</th>
                                                <th>Agência</th>
                                                <th>Número da conta</th>
                                                <th>Saldo</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < count($contas); $i++) { ?>
                                                <tr class="odd gradeX">
                                                    <td><?= $contas[$i]['banco_conta'] ?></td>
                                                    <td><?= $contas[$i]['agencia_conta'] ?></td>
                                                    <td><?= $contas[$i]['numero_conta'] ?></td>
                                                    <td><?= $contas[$i]['saldo_conta'] ?></td>
                                                    <td><a href="alterar_conta.php?cod=<?= $contas[$i]['id_conta'] ?>" class="btn btn-warning btn-sm">Alterar</a></td>
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
        </div>
    </div>

    <?php include_once '_footer.php'; ?>

</body>

</html>