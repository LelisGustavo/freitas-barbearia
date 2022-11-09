<?php

require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/CategoriaDAO.php';

$objDAO = new CategoriaDAO();

if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {

    $id_categoria = $_GET['cod'];

    $dados = $objDAO->DetalharCategoria($id_categoria);

    if (count($dados) == 0) {

        header('location: consultar_categoria.php');
        exit;
    }
} elseif (isset($_POST['btnSalvar'])) {

    $id_categoria = $_POST['cod'];
    $nome_categoria = $_POST['nome_categoria'];

    $ret = $objDAO->AlterarCategoria($nome_categoria, $id_categoria);

    header('location: consultar_categoria.php?ret=' . $ret);
    exit;
} elseif (isset($_POST['btnExcluir'])) {

    $id_categoria = $_POST['cod'];

    $ret = $objDAO->ExcluirCategoria($id_categoria);

    header('location: consultar_categoria.php?ret=' . $ret);
    exit;
} else {

    header('location: consultar_categoria.php');
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
                        <h2>Alterar Categoria</h2>
                        <h5>Aqui você poderá alterar ou excluir suas categorias. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="alterar_categoria.php" method="post">
                    <input type="hidden" name="cod" value="<?= $dados[0]['id_categoria'] ?>">
                    <div class="form-group" id="div_categoria_1">
                        <label>Nome da Categoria</label>
                        <input class="form-control" id="nome_categoria" placeholder="Digite o nome da categoria.. Ex: conta de luz" value="<?= $dados[0]['nome_categoria'] ?>" name="nome_categoria" />
                    </div>
                    <button type="submit" class="btn btn-success" name="btnSalvar" onclick="return ValidarCategoria()">Salvar</button>
                    <button type="button" data-toggle="modal" data-target="#modalExcluir" class="btn btn-danger">Excluir</button>

                    <div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Confirmação de exclusão</h4>
                                </div>
                                <div class="modal-body">
                                    Deseja excluir a categoria: <b> <?= $dados[0]['nome_categoria'] ?> </b> ?
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
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

    <?php include_once '_footer.php'; ?>

</body>

</html>