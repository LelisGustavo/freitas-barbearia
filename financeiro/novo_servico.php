<?php



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
                        <h2>Novo Serviço</h2>
                        <h5>Aqui você poderá cadastrar todos os seus serviços. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

                <form action="nova_categoria.php" method="post">
                    <div class="form-group">
                        <label>Nome do serviço</label>
                        <input class="form-control" placeholder="Digite o nome do serviço.. Ex: corte de cabelo" name="nome_servico" value="<?= isset($nome_servico) ? $nome_servico : '' ?>"/>
                    </div>
                    <button type="submit" class="btn btn-success" name="btnGravar">Gravar</button>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>



</body>

</html>