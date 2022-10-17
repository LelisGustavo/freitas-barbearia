<?php

require_once '../DAO/AgendaDAO.php';

$objDAO = new AgendaDAO();

if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {

    $id_agenda = $_GET['cod'];

    $dados = $objDAO->DetalharAgenda($id_agenda);

    if (count($dados) == 0) {

        header('location: consultar_horario.php');
        exit;
    }
} elseif (isset($_POST['btnSalvar'])) {

    $id_agenda = $_POST['cod'];
    $nome_servico = $_POST['nome_servico'];
    $horario = $_POST['horario'];
    $data = $_POST['data'];

    $ret = $objDAO->AlterarAgenda($id_agenda, $nome_servico, $horario, $data);

    header('location: consultar_horario.php?ret=' . $ret);
    exit;
} elseif (isset($_POST['btnExcluir'])) {

    $id_agenda = $_POST['cod'];

    $ret = $objDAO->ExcluirAgenda($id_agenda);

    header('location: consultar_horario.php?ret=' . $ret);
    exit;
} else {

    header('location: consultar_horario.php');
    exit;
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
                        <?php require_once '_msg.php'; ?>
                        <h2>Alterar Horário</h2>
                        <h5>Aqui você poderá alterar ou excluir seus horários. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="alterar_horario.php" method="post">
                    <input type="hidden" name="cod" value="<?= $dados[0]['id_agenda'] ?>">
                    <div class="col-md-4">
                        <div class="form-group" id="div_horario_1">
                            <label>Serviço a ser alterado*</label>
                            <input class="form-control" name="nome_servico" id="nome_servico" value="<?= $dados[0]['nome_servico'] ?>" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group" id="div_horario_2">
                            <label>Horário*</label>
                            <input class="form-control" type="time" name="horario" id="horario" value="<?= $dados[0]['horario_agenda'] ?>" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group" id="div_horario_3">
                            <label>Data*</label>
                            <input class="form-control" type="date" name="data" id="data" value="<?= $dados[0]['data_agenda'] ?>" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" name="btnSalvar" class="btn btn-success" onclick="return ValidarHorario()">Salvar</button>
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