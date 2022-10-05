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
                        <h2>Alterar Horário</h2>
                        <h5>Aqui você poderá alterar ou excluir seus horários. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Serviço a ser alterado</label>
                        <input class="form-control" id="nome_servico" placeholder="Digite o nome do serviço.. Ex: corte de cabelo" />
                    </div>
                    <button type="submit" class="btn btn-success" onclick="return ValidarHorario()">Salvar</button>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Horário</label>
                        <input class="form-control" type="time" id="horario" />
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>