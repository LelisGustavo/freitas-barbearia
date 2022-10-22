<?php

require_once '../DAO/EstoqueDAO.php';

if (isset($_POST['btnGravar'])) {

   $nome_produto = $_POST['nome_produto'];

   $objDAO = new EstoqueDAO();

   $ret = $objDAO->CadastrarEstoque($nome_produto);
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
                        <h2>Novo Estoque</h2>
                        <h5>Aqui você poderá cadastrar todo o seu estoque. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

                <form action="novo_estoque.php" method="post">
                    <div class="form-group" id="div_estoque_1">
                        <label>Nome da produto*</label>
                        <input class="form-control" placeholder="Digite o nome do produto.. Ex: gel para cabelo" name="nome_produto" id="nome_produto" maxlength="35" />
                    </div>
                    <button type="submit" class="btn btn-success" name="btnGravar" onclick="return ValidarConsultaPeriodoEstoque()">Gravar</button>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

    <?php include_once '_footer.php'; ?>

</body>

</html>