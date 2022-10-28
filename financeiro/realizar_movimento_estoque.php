<?php

require_once '../DAO/EstoqueDAO.php';

$objDAO = new EstoqueDAO();

if (isset($_POST['btnGravar'])) {

    $tipo_movimento = $_POST['tipo_movimento'];
    $quantidade = $_POST['quantidade'];
    $nome_produto = $_POST['nome_produto'];

    $ret = $objDAO->RealizarMovimentoEstoque($tipo_movimento, $quantidade, $nome_produto);
} else {

    $objDAO = new EstoqueDAO();
    $estoques = $objDAO->ConsultarEstoque();
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
                        <?php include_once '_msg.php';  ?>
                        <h2>Realizar Movimento Estoque</h2>
                        <h5>Aqui você poderá realizar movimentos de entrada ou saída do estoque. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="realizar_movimento_estoque.php" method="post">
                    <div class="col-md-4">
                        <input type="hidden" value="<?= $id_estoque ?>">
                        <div class="form-group" id="div_estoque_1">
                            <label>Tipo do movimento*</label>
                            <select class="form-control" name="tipo_movimento" id="tipo_movimento">
                                <option value="">Selecione</option>
                                <option value="1">Entrada</option>
                                <option value="2">Saída</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success" name="btnGravar" onclick="return ValidarEstoque()">Finalizar lançamento</button>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group" id="div_estoque_2">
                            <label>Produto*</label>
                            <select class="form-control" name="nome_produto" id="nome_produto">
                                <option value="">Selecione</option>
                                <?php foreach ($estoques as $item) { ?>
                                    <option value="<?= $item['id_estoque'] ?>"> <?= $item['produto_estoque'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group" id="div_estoque_3">
                            <label>Quantidade*</label>
                            <input class="form-control" placeholder="Quantidade de produto em estoque" type="number" name="quantidade" id="quantidade">
                        </div>
                    </div>

                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

    <?php include_once '_footer.php'; ?>

</body>

</html>