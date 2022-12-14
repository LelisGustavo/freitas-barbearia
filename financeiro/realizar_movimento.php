<?php

require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/MovimentoDAO.php';
require_once '../DAO/CategoriaDAO.php';
require_once '../DAO/EmpresaDAO.php';
require_once '../DAO/ContaDAO.php';

$objDAO_categoria =  new CategoriaDAO();
$objDAO_empresa = new EmpresaDAO();
$objDAO_conta = new ContaDAO();

if (isset($_POST['btnGravar'])) {

    $tipo_movimento = $_POST['tipo_movimento'];
    $data = $_POST['data'];
    $valor = $_POST['valor'];
    $nome_categoria = $_POST['nome_categoria'];
    $nome_empresa = $_POST['nome_empresa'];
    $conta_banco = $_POST['conta_banco'];
    $obs = $_POST['obs'];

    $objDAO = new MovimentoDAO();

    $ret = $objDAO->RealizarMovimento($tipo_movimento, $nome_categoria, $data, $nome_empresa, $valor, $conta_banco, $obs);
}

$categorias = $objDAO_categoria->ConsultarCategoria();
$empresas = $objDAO_empresa->ConsultarEmpresa();
$contas = $objDAO_conta->ConsultarConta();

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
                        <h2>Realizar Movimento</h2>
                        <h5>Aqui você poderá realizar seus movimentos de entrada ou saída. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="realizar_movimento.php" method="post">
                    <div class="col-md-6">

                        <div class="form-group" id="div_movimento_1">
                            <label>Tipo do movimento*</label>
                            <select class="form-control" name="tipo_movimento" id="tipo_movimento">
                                <option value="">Selecione</option>
                                <option value="1">Entrada</option>
                                <option value="2">Saída</option>
                            </select>
                        </div>
                        <div class="form-group" id="div_movimento_2">
                            <label>Data*</label>
                            <input class="form-control" type="date" name="data" id="data" value="<?= UtilDAO::DataAtual() ?>"/>
                        </div>
                        <div class="form-group" id="div_movimento_3">
                            <label>Valor*</label>
                            <input class="form-control" name="valor" id="valor" placeholder="Digite o valor do movimento" />
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group" id="div_movimento_4">
                            <label>Categoria*</label>
                            <select class="form-control" name="nome_categoria" id="nome_categoria">
                                <option value="">Selecione</option>
                                <?php foreach ($categorias as $item) { ?>
                                    <option value="<?= $item['id_categoria'] ?>">
                                        <?= $item['nome_categoria'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group" id="div_movimento_5">
                            <label>Empresa*</label>
                            <select class="form-control" name="nome_empresa" id="nome_empresa">
                                <option value="">Selecione</option>
                                <?php foreach ($empresas as $item) { ?>
                                    <option value="<?= $item['id_empresa'] ?>">
                                        <?= $item['nome_empresa'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group" id="div_movimento_6">
                            <label>Conta*</label>
                            <select class="form-control" name="conta_banco" id="conta_banco">
                                <option value="">Selecione</option>
                                <?php foreach ($contas as $item) { ?>
                                    <option value="<?= $item['id_conta'] ?>">
                                        <?= 'Banco: ' . $item['banco_conta'] .
                                            ' / Agência: ' . $item['agencia_conta'] .
                                            ' / Núm. Conta: ' . $item['numero_conta'] .
                                            ' - Saldo R$ ' . $item['saldo_conta'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Observação (opcional)</label>
                            <textarea class="form-control" name="obs" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" name="btnGravar" onclick="return ValidarMovimento()">Finalizar lançamento</button>
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