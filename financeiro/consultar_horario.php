<?php

require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/AgendaDAO.php';

$objDAO = new AgendaDAO();

$horarios = $objDAO->ConsultarHorario();

// echo '<pre>';
// print_r($horarios);
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
                        <h2>Consultar Horários</h2>
                        <h5>Consulte todos seus horários cadastrados aqui. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Horários cadastrados. Caso deseje alterar, clique no botão
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Serviço</th>
                                        <th>Horário</th>
                                        <th>Data</th>
                                        <th>Observação</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($horarios as $item) { ?>
                                        <tr class="odd gradeX">
                                            <td><?= $item['nome_servico'] ?></td>
                                            <td><?= $item['horario_agenda'] ?></td>
                                            <td><?= $item['data_agenda'] ?></td>
                                            <td><?= $item['obs_agenda'] ?></td>
                                            <td><a href="alterar_horario.php?cod=<?= $item['id_agenda'] ?>" class="btn btn-warning btn-sm">Alterar</a></td>
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