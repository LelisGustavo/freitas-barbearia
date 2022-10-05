<?php

require_once '../DAO/AgendaDAO.php';

if (isset($_POST['btnGravar'])) {

    $nome_servico = $_POST['nome_servico'];
    $horario = $_POST['horario'];

    $objDAO = new AgendaDAO();

    $ret = $objDAO->CadastrarHorario($nome_servico, $horario);
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
                        <?php include_once '_msg.php'; ?>
                        <h2>Novo Horário</h2>
                        <h5>Aqui você poderá cadastrar todos os seus horários. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

                <form action="novo_horario.php" method="post">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Serviço a ser realizado*</label>
                            <input class="form-control" placeholder="Digite o nome do serviço.. Ex: corte de cabelo" name="nome_servico" id="nome_servico" maxlength="35" />
                        </div>
                        <button type="submit" class="btn btn-success" name="btnGravar" onclick="return ValidarHorario()">Gravar</button>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Horário*</label>
                            <input class="form-control" type="time" name="horario" id="horario" placeholder="Coloque o horário a ser agendado" />
                        </div>
                    </div>

                </form>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>



</body>

</html>