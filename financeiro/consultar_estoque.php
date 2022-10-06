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
                        <h5>Consulte todo seu estoque aqui. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

                <div class="col-md-12">

                    <div class="form-group" id="div_estoque_1">
                        <label>Produto*</label>
                        <select class="form-control" name="nome_produto" id="nome_produto">
                            <option value="">Selecione</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group" id="div_estoque_2">
                        <label>Data inicial*</label>
                        <input type="date" class="form-control" placeholder="Coloque a data do movimento" name="data_inicial" id="data_inicial" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" id="div_estoque_3">
                        <label>Data final*</label>
                        <input type="date" class="form-control" placeholder="Coloque a data do movimento" name="data_final" id="data_final" />
                    </div>
                </div>
                <center>
                    <button type="submit" class="btn btn-info" onclick="return ValidarConsultaPeriodoEstoque()" name="btnPesquisar">Pesquisar</button>
                </center>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Estoque de produtos cadastrados.
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Data</th>
                                                <th>Tipo</th>
                                                <th>Produto</th>
                                                <th>Quantidade</th>
                                                <th>Observação</th>
                                                <th>Ação</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>(data)</td>
                                                <td>(tipo)</td>
                                                <td>(produto)</td>
                                                <td>(qtd)</td>
                                                <td>(obs)</td>
                                                <td><a href="#" class="btn btn-danger btn-sm">Excluir</a></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>