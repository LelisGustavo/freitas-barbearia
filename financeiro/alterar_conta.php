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
                        <h2>Alterar Conta</h2>
                        <h5>Aqui você poderá alterar todas as suas contas. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="form-group" id="div_conta_1">
                    <label>Nome do banco*</label>
                    <input class="form-control" id="nome_banco" placeholder="Digite o nome do banco.." />
                </div>
                <div class="form-group" id="div_conta_2">
                    <label>Agência*</label>
                    <input class="form-control" id="agencia" placeholder="Digite a agência" />
                </div>
                <div class="form-group" id="div_conta_3">
                    <label>Número da conta*</label>
                    <input class="form-control" id="numero_conta" placeholder="Digite o número da conta" />
                </div>
                <div class="form-group" id="div_conta_4">
                    <label>Saldo*</label>
                    <input class="form-control" id="saldo" placeholder="Digite o saldo da conta" />
                </div>
                <button type="submit" class="btn btn-success" onclick="return ValidarConta()">Salvar</button>
                <button type="submit" class="btn btn-danger">Excluir</button>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>