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
                <div class="form-group" id="divCliente">
                    <center>
                        <label>Procurar por:</label>
                        <select class="btn btn-default dropdown-toggle" name="filtro">
                            <option value="" >Selecione a opção</option>
                            <option value="conta_banco">Banco</option>
                            <option value="agencia_conta">Agência</option>
                            <option value="numero_conta">Número da conta</option>
                            <option value="saldo_conta">Saldo</option>
                        </select>
                    </center>
                    <br>
                    <input class="form-control" name="filtrar" id="filtrar" placeholder="Digite aqui..." value="">
                    <br>
                    <center>
                        <button type="submit" onclick="return ValidarConta()" name="btnPesquisar" class="btn btn-info">Pesquisar</button>
                    </center>
                </div>

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
                                    <tr class="odd gradeX">
                                        <td>(banco)</td>
                                        <td>(agencia)</td>
                                        <td>(num conta)</td>
                                        <td>(saldo)</td>
                                        <td><a href="alterar_conta.php" class="btn btn-warning btn-sm">Alterar</a></td>
                                    </tr>

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

</body>

</html>