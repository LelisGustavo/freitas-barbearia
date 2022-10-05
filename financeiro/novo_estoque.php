<?php

require_once '../DAO/EstoqueDAO.php';

if (isset($_POST['btnGravar'])) {

    $tipo_movimento = $_POST['tipo_movimento'];
    $data = $_POST['data'];
    $nome_produto = $_POST['nome_produto'];
    $quantidade = $_POST['quantidade'];
    $obs = $_POST['obs'];

    $objDAO = new EstoqueDAO();

    $ret = $objDAO->RealizarMovimentoEstoque($tipo_movimento, $data, $quantidade, $nome_produto, $obs);
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
                <form action="novo_estoque.php" method="post">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Tipo do movimento*</label>
                            <select class="form-control" name="tipo_movimento" id="tipo_movimento">
                                <option value="">Selecione</option>
                                <option value="1">Entrada</option>
                                <option value="2">Saída</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data*</label>
                            <input class="form-control" type="date" name="data" id="data" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Produto*</label>
                            <input class="form-control" type="text" placeholder="Digite o nome do produto.. Ex: Gel para cabelo" name="nome_produto" id="nome_produto" maxlength="40">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Quantidade*</label>
                            <input class="form-control" placeholder="Digite a quantidade de produto em estoque" type="number" name="quantidade" id="quantidade">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Observação (opcional)</label>
                            <textarea class="form-control" rows="3" name="obs"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" name="btnGravar" onclick="return ValidarEstoque()">Finalizar lançamento</button>
                    </div>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>



</body>

</html>