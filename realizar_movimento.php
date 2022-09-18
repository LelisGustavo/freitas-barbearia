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
                        <h2>Realizar Movimento</h2>
                        <h5>Aqui você poderá realizar seus movimentos de entrada ou saída. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

                <div class="col-md-6">

                    <div class="form-group">
                        <label>Tipo do movimento*</label>
                        <select class="form-control" name="tipo_movimento" id="tipo_movimento">
                            <option value="">Selecione</option>
                            <option value="1">Entrada</option>
                            <option value="2">Saída</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Data*</label>
                        <input class="form-control" type="date" />
                    </div>
                    <div class="form-group">
                        <label>Valor*</label>
                        <input class="form-control" placeholder="Digite o valor do movimento" />
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Categoria*</label>
                        <select class="form-control" name="nome_categoria" id="nome_categoria">
                            <option value="">Selecione</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Empresa*</label>
                        <select class="form-control" name="nome_empresa" id="nome_empresa">
                            <option value="">Selecione</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Conta*</label>
                        <select class="form-control" name="conta_banco" id="conta_banco">
                            <option value="">Selecione</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Observação (opcional)</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Finalizar lançamento</button>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>



</body>

</html>