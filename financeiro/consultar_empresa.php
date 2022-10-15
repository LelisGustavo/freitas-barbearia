<?php

require_once '../DAO/EmpresaDAO.php';

$objDAO = new EmpresaDAO();

$empresas = $objDAO->ConsultarEmpresa();

// echo '<pre>';
// print_r($empresas);
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
                        <h2>Consultar Empresa</h2>
                        <h5>Consulte todas suas empresas aqui. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="form-group" id="divEmpresa">
                    <center>
                        <label>Procurar por:</label>
                        <select class="btn btn-default dropdown-toggle" name="filtro">
                            <option value="">Selecione a opção</option>
                            <option value="nome_empresa">Nome</option>
                            <option value="telefone_empresa">Telefone</option>
                            <option value="endereco_empresa">Endereço</option>
                        </select>
                    </center>
                    <br>
                    <input class="form-control" name="filtrar" id="filtrar" placeholder="Digite aqui..." value="">
                </div>
                <center>
                    <button type="submit" onclick="return ValidarEmpresa()" name="btnPesquisar" class="btn btn-info">Pesquisar</button>
                </center>


                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Empresas cadastradas. Caso deseje alterar, clique no botão.
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nome da empresa</th>
                                                <th>Telefone</th>
                                                <th>Endereço</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <?php for ($i = 0; $i < count($empresas); $i++) { ?>
                                                    <td><?= $empresas[$i]['nome_empresa'] ?></td>
                                                    <td><?= $empresas[$i]['telefone_empresa'] ?></td>
                                                    <td><?= $empresas[$i]['endereco_empresa'] ?></td>
                                                    <td><a href="alterar_empresa.php?cod=<?= $empresas[$i]['id_empresa'] ?>" class="btn btn-warning btn-sm">Alterar</a></td>
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